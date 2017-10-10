//获取应用实例
var app = getApp();
Page({
    data: {
        activeCategoryId: 0,
        categories: [
            { name: "商品", id: 0 },
            { name: "详情", id: 1 },
            { name: "评论", id: 2 }
        ],
        activeCategoryId2:0,
        categories2: [
            { name: "商品详情", id: 0 },
            { name: "规格参数", id: 1 },
        ],
        activeCategoryId3: 0,
        categories3: [
            { name: "全部评价", id: 0,num:12 },
            { name: "好评", id: 1,num:10 },
            { name: "中评", id: 2, num:0 },
            { name: "差评", id: 3, num: 2 },
            { name: "有图", id: 4, num: 10 }
        ],
        indicatorDots: true,
        vertical: false,
        autoplay: true,
        interval: 3000,
        duration: 1000,
        homeData:[
            { swiperSrc:'http://test5.tp-shop.cn/public/upload/goods/2016/04-20/5717505a692de.jpg'},
            { swiperSrc: 'http://test5.tp-shop.cn/public/upload/goods/2016/04-20/57175059b2046.jpg' },
            { swiperSrc: 'http://test5.tp-shop.cn/public/upload/goods/2016/04-20/57175059527f4.jpg' },
        ],
        toTop:'http://test5.tp-shop.cn/template/mobile/new2/static/images/topup.png',
        COD:'http://test5.tp-shop.cn/template/mobile/new2/static/images/hdfk.png',
        refunds:'http://test5.tp-shop.cn/template/mobile/new2/static/images/qttk.png',
        topSpeed:'http://test5.tp-shop.cn/template/mobile/new2/static/images/ksd.png',
        cartGoodsNum:99,
        commentMore:true,
        goods:{
            goodsName:'爸爸2陆毅代言索扬20000毫安充电宝轻薄正品手机通用移动电源MAh',
            priceNow:'84.99',
            marketPrice:'184.99',
            sales:'32',
            stock:'772',
            goodComment: '50%',
            commentNum: 8,
            recommend:[
                { 
                    recommendImg:'http://test5.tp-shop.cn/public/upload/goods/thumb/143/goods_thumb_143_400_400.jpeg',
                    recommendName:'足球',
                    recommendPerice:123.00
                },
                {
                    recommendImg: 'http://test5.tp-shop.cn/public/upload/goods/thumb/143/goods_thumb_143_400_400.jpeg',
                    recommendName: '云南白药',
                    recommendPerice: 44.00
                },
                {
                    recommendImg: 'http://test5.tp-shop.cn/public/upload/goods/thumb/143/goods_thumb_143_400_400.jpeg',
                    recommendName: '榴莲',
                    recommendPerice: 88.88
                },
                {
                    recommendImg: 'http://test5.tp-shop.cn/public/upload/goods/thumb/143/goods_thumb_143_400_400.jpeg',
                    recommendName: 'haier海尔 BC-93TMPF 93升单门冰箱',
                    recommendPerice: 1230.66
                }
            ]
        },
        order:{
            userAddress:'北京市市辖区房山区',
            logisticsWay:'申通快递',
            freight:10,
            goodsColor:'土豪金',
            goodsNum:1,
            goodsService:'由商城自营发货并提供售后服务'
        },
        comment:[
            {
                userName: '王楠',
                avatar:'http://test5.tp-shop.cn/template/mobile/new2/static/images/user68.jpg',
                commentTime:'2017-05-23 15:58',
                starNum:4,
                commentMes:'给朋友买的，还不错，下次再来看看',
                commentImg:[
                    {
                        imgSrc:'http://test5.tp-shop.cn/public/upload/goods/2016/04-20/57175033b5c37.jpg'
                    },
                    {
                        imgSrc: 'http://test5.tp-shop.cn/public/upload/goods/2016/04-20/5717505a692de.jpg'
                    },
                    {
                        imgSrc: 'http://test5.tp-shop.cn/public/upload/goods/2016/04-20/57175059b2046.jpg'
                    }
                ],
                replyList:[
                    {
                        userName: 'admin',
                        replyMes: '觉不错给个五星好评谢谢'
                    },
                    {
                        userName: '李思',
                        replyMes: '这个商品是不是真的不错啊，我也想买一个送朋友'
                    }
                ],
                likesNum:10,
                mesNum:5
            },
            {
                userName: '张山',
                avatar: 'http://test5.tp-shop.cn/template/mobile/new2/static/images/user68.jpg',
                commentTime: '2017-05-23 15:58',
                starNum: 1,
                commentMes: '给朋友买的，还不错，下次再来看看',
                commentImg: [
                
                ],
                replyList: [
                    {
                        userName: 'admin',
                        replyMes: '给您造成不好的用户体验十分抱歉'
                    },
                    {
                        userName: '李思',
                        replyMes: '这个商品是不是真的不错啊，我也想买一个送朋友'
                    }
                ],
                likesNum:0,
                mesNum: 0
            }
        ],
        parameter:[
            { tdTitle: '包装尺寸', tdText:'510*497*855毫米'},
            { tdTitle: '毛重', tdText: '27千克' },
            { tdTitle: '品牌', tdText: '海尔' },
            { tdTitle: '制冷方式', tdText: '直冷' },
            { tdTitle: '能效等级', tdText: '五级' }
        ],
    },

    //事件处理函数
    swiperchange: function (e) {
        //console.log(e.detail.current)
    },
    tabClick: function (e) {
        this.setData({
            activeCategoryId: e.currentTarget.id
        });
    },
    tabClick2:function (e){
        this.setData({
            activeCategoryId2: e.currentTarget.id
        });
    },
    tabClick3: function (e) {
        this.setData({
            activeCategoryId3: e.currentTarget.id
        });
    },

});
