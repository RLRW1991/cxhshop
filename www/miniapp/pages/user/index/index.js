var app = getApp()
Page( {
  data: {
    userInfo: {},
    projectSource: 'https://github.com/liuxuanqiang/wechat-weapp-mall',
    userInfoList:{
        mesList:[
            {
                num:2,
                des: '我的收藏'
            },
            {
                num: 10,
                des: '消息通知'
            },
        ],
        orderIco:'http://test5.tp-shop.cn/template/mobile/new2/static/images/mlist.png',
        orderList:[
            {
                pic:'http://test5.tp-shop.cn/template/mobile/new2/static/images/q1.png',
                des:'待付款',
                num:100
            },
            {
                pic: 'http://test5.tp-shop.cn/template/mobile/new2/static/images/q2.png',
                des: '待收货',
                num: 8
            },
            {
                pic: 'http://test5.tp-shop.cn/template/mobile/new2/static/images/q3.png',
                des: '待评价',
                num: 5
            },
            {
                pic: 'http://test5.tp-shop.cn/template/mobile/new2/static/images/q4.png',
                des: '退款/退货',
                num: 2
            }
        ],
        walletIco:'http://test5.tp-shop.cn/template/mobile/new2/static/images/mwallet.png',
        walletList:[
            {   
                num:16502.17,
                des: '余额'
            },
            {
                num: 0,
                des: '优惠券'
            },
            {
                num: 28819,
                des: '积分'
            }
        ],
        manageList:[
            {
                pic: 'http://test5.tp-shop.cn/template/mobile/new2/static/images/w1.png',
                des: '我的分销'
            },
            {
                pic: 'http://test5.tp-shop.cn/template/mobile/new2/static/images/w2.png',
                des: '我的评价'
            },
            {
                pic: 'http://test5.tp-shop.cn/template/mobile/new2/static/images/w7.png',
                des: '领券中心'
            },
            {
                pic: 'http://test5.tp-shop.cn/template/mobile/new2/static/images/w3.png',
                des: '浏览历史'
            },
            {
                pic: 'http://test5.tp-shop.cn/template/mobile/new2/static/images/w8.png',
                des: '地址管理'
            }
        ]
    }
  },

  onLoad: function() {
    var that = this
    //调用应用实例的方法获取全局数据
    app.getUserInfo( function( userInfo ) {
      //更新数据
      that.setData( {
        userInfo: userInfo
      })
    })
  }
})