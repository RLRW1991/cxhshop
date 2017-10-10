// var app = getApp()
// Page({
//     data: {
//         categories:[
//             { name: "全部订单",id:0 },
//             { name: "待付款",id:1 },
//             { name: "待发货",id:2 },
//             { name: "已完成",id:3 }
//         ],
//         activeCategoryId: 0,
//         payStatusVal:['已完成','待支付','待取消','待评价'],
//         payStatusClass: ['order-completed', 'order-payment', 'order-cancel', 'order-evaluate'],
//         goods: [
//             { 
//                 id: 0, orderNumber: '201707101402217522', payStatus:0, 
//                 pic:"http://test5.tp-shop.cn/public/upload/goods/thumb/115/goods_thumb_115_200_200.jpeg",
//                 name: "爸爸2陆毅代言索扬20000毫安充电宝轻...", price:17.83,num:1,total:21.00
//             },
//             { 
//                 id: 1, orderNumber: '201707101402217522', payStatus:1,
//                 pic: "http://test5.tp-shop.cn/public/upload/goods/thumb/42/goods_thumb_42_200_200.png",
//                 name: "Teclast/台电 X80 Plus ...", price: 108.20, num: 1, total: 147.50
//             },
//             { 
//                 id: 2, orderNumber: '201707101402217522', payStatus:2,
//                 pic: "http://test5.tp-shop.cn/public/upload/goods/thumb/116/goods_thumb_116_200_200.jpeg",
//                 name: "ROMOSS/罗马仕 sense6 20...", price: 1688.50, num: 1, total:1998.00
//             },
//             { 
//                 id: 3, orderNumber: '201707101402217522', payStatus:3,
//                 pic: "http://test5.tp-shop.cn/public/upload/goods/thumb/143/goods_thumb_143_200_200.jpeg",
//                 name: "小米手机5,十余项黑科技，很轻狠快", price: 12000.45, num: 1, total:15045.99
//             }
//         ],
//         loadingMoreHidden: true
//     },

//     tabClick: function (e) {
//         this.setData({
//             activeCategoryId: e.currentTarget.id
//         });
//         this.getGoodsList(this.data.activeCategoryId);
//     },
//     toDetailsTap: function (e) {
//         wx.navigateTo({
//             url: "/pages/goods-details/index?id=" + e.currentTarget.dataset.id
//         })
//     },
//     getGoodsList: function (categoryId) {
//         if (categoryId == 0) {
//             categoryId = "";
//         }
//         console.log(categoryId)
//         var that = this;
//         wx.request({
//             url: 'https://api.it120.cc/' + app.globalData.subDomain + '/shop/goods/list',
//             data: {
//                 categoryId: categoryId
//             },
//             success: function (res) {
//                 that.setData({
//                     goods: [],
//                     loadingMoreHidden: true
//                 });
//                 var goods = [];
//                 if (res.data.code != 0 || res.data.data.length == 0) {
//                     that.setData({
//                         loadingMoreHidden: false,
//                     });
//                     return;
//                 }
//                 for (var i = 0; i < res.data.data.length; i++) {
//                     goods.push(res.data.data[i]);
//                 }
//                 that.setData({
//                     goods: goods,
//                 });
//             }
//         })
//     }
// })


var app = getApp();
var load = require('../../../utils/loadMore.js');

Page({
    data: {
        url: app.globalData.url,
        resourceUrl: app.globalData.resourceUrl,
        categories: [
            { name: "全部订单", id: 0 },
            { name: "待付款", id: 1 },
            { name: "待发货", id: 2 },
            { name: "已完成", id: 3 }
        ],
        activeCategoryId: 0,
        payStatusVal: ['已完成', '待支付', '待取消', '待评价'],
        payStatusClass: ['order-completed', 'order-payment', 'order-cancel', 'order-evaluate'],
        
        requestData: null,
        currentPage: 1
    },

    load: load,

    onLoad: function () {
        this.load.init(this, '', 'requestData');
        this.requestOrderList(this.data.categories.id);
    },

    changeTab: function(e) {
        //重置数据
        this.setData({
            activeCategoryId: e.currentTarget.id
        });
        this.load.resetConfig();
        this.data.requestData = null;
        this.data.currentPage = 1;
        this.requestOrderList(e.currentTarget.id);
    },

    requestOrderList: function(categoryId) {
        var that = this;
        var requestUrl = that.data.url + '/api/user/getOrderList';
        var tabType = '';
        if (categoryId == 1) {
            tabType = 'WAITPAY';
        } else if (categoryId == 2) {
            tabType = 'WAITSEND';
        } else if (categoryId == 3) {
            tabType = 'WAITCCOMMENT';
        }

        if (tabType) {
            requestUrl += '/type/' + tabType;
        }

        requestUrl = requestUrl + '?p=' + that.data.currentPage;
        this.load.request(requestUrl, function (res) {
            that.data.currentPage++;
            res.data.result.forEach(function (val, index, arr) {
                val.goods_sum = val.goods_list.reduce(function (sum, idx) {
                    return sum + idx.goods_num
                }, 0);
            });
            
        });
    },

    loadMore: function (event) {
        if (this.load.canloadMore(event)) {
            this.requestOrderList(this.data.categories.id);
        }
    },
});