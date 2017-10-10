var app = getApp();
var request = require('../../../utils/request.js');

Page({
    data: {
        url: app.globalData.url,
        resourceUrl: app.globalData.resourceUrl,
        requestData: null,
        isLogin:false,
        checkAllToggle: false,

        cartImg: '../../../images/cart-null.png',
        tipWords: '购物车空空如也',
        updateInTime:'热卖商品实时更新，常回来看看哟~',
        hotSale:'查看热卖',
        orderList:[
            {
                checked:false,
                goodsName: 'haier海尔 BC-93TMPF 93升单门冰箱', 
                goodsImg:'http://test5.tp-shop.cn/public/upload/goods/thumb/143/goods_thumb_143_200_200.jpeg',
                size:'7寸及以下',
                RAM:'16G',
                color:'银白色',
                goodsPrice:150,
                num:1
            },
            {   
                checked: false,
                goodsName: '格力法式双华冰箱N97独家特制',
                goodsImg: 'http://test5.tp-shop.cn/public/upload/goods/thumb/143/goods_thumb_143_200_200.jpeg',
                size:'',
                RAM: '',
                color: '',
                goodsPrice: 150,
                num: 5
            }
        ]
    },
    
    onLoad: function () {
        this.getCardList();
    },
    deleteItem:function (e) {
        var that = this;
        wx.showModal({
            title: '确定删除',
            success: function () {
                var id = that.data.requestData.cartList[e.currentTarget.dataset.item].id;
                var requestUrl = that.data.url + '/api/cart/delCart?ids=' + id;
                request.post(requestUrl, {
                    success: function (res) {
                        that.getCardList();
                    }
                });
            }
        })
    },
    valueToNum:function (e) {
        var goodsNum;
        var cart = this.data.requestData.cartList[e.currentTarget.dataset.item];
        if (isNaN(e.detail.value) || e.detail.value < 1){
            goodsNum = 1;
        } else {
            goodsNum = parseInt(e.detail.value);
        }
        if (goodsNum > cart.store_count) {
            goodsNum = cart.store_count;
        }
        if (cart.goods_num == goodsNum) {
            return;
        }
        var postData = JSON.stringify([{
            goodsNum: goodsNum,
            selected: cart.selected,
            cartID: cart.id,
        }]);
        this.postCardList(postData);
    },
    addNum:function (e) {
        var cart = this.data.requestData.cartList[e.currentTarget.dataset.item];
        if (cart.goods_num >= cart.store_count) {
            return;
        }
        var postData = JSON.stringify([{
            goodsNum: cart.goods_num + 1,
            selected: cart.selected,
            cartID: cart.id,
        }]);
        this.postCardList(postData);
    },
    subNum:function (e) {
        var cart = this.data.requestData.cartList[e.currentTarget.dataset.item];
        if (cart.goods_num == 1) {
            return;
        }
        var postData = JSON.stringify([{
            goodsNum: cart.goods_num - 1,
            selected: cart.selected,
            cartID: cart.id,
        }]);
        this.postCardList(postData);
    },
    checkAll:function(){
        var checkAll = !this.data.checkAllToggle;
        var postCardList = [];
        var cartList = this.data.requestData.cartList;
        for (var i = 0, j = cartList.length; i < j; i++){
            postCardList[i].cartID = cartList[i].id;
            postCardList[i].goodsNum = cartList[i].goods_num;
            postCardList[i].selected = checkAll;
        }
        var postData = JSON.stringify(postCardList);
        this.postCardList(postData);
    },
    checkItem: function (e) {
        var cart = this.data.requestData.cartList[e.currentTarget.dataset.item];
        var postData = JSON.stringify([{
            goodsNum: cart.goods_num,
            selected: !cart.selected,
            cartID: cart.id,
        }]);
        this.postCardList(postData);
    },
    doCheckAll: function () {
        var cartList = this.data.requestData.cartList;
        for (var i = 0, j = cartList.length; i < j; i++) {
            if (!cartList[i].selected) {
                this.setData({
                    checkAllToggle: false
                });
                return;
            }
        };
        this.setData({
            checkAllToggle: true
        });
    },
    postCardList: function (postData) {
        var that = this;
        request.post(that.data.url + '/api/cart/cartList', {
            data: { cart_form_data: postData },
            success: function (res) {
                that.setData({
                    requestData: res.data.result
                });
                that.doCheckAll();
            }
        });
    },
    getCardList: function () {
        var that = this;
        request.get(that.data.url + '/api/cart/cartList', {
            success: function (res) {
                that.setData({
                    requestData: res.data.result
                });
                that.doCheckAll();
            }
        });
    }
});