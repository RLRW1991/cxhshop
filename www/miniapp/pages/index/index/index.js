//获取应用实例
var app = getApp();
var load = require('../../../utils/loadMore.js');

Page({
    data: {
        url: app.globalData.url,
        scrollTop:0,
        resourceUrl: app.globalData.resourceUrl,
        homeData: null,
        loadingHidden: false,
        goodsCurrentPage: 1,
    },

    load: load,

    //事件处理函数
    onLoad: function() {
        this.load.init(this, 'favourite_goods', 'homeData', 'high_quality_goods');
        this.requrstHomePage();//首页数据
    },

    loadMoreGoods: function(event) {
        if (this.load.canloadMore(event)) {
            this.requestFavouriteGoods();
        }
    },

    requestFavouriteGoods: function (rank) {
        var that = this;
        var requestUrl = that.data.url + '/api/index/favourite?p=' + that.data.goodsCurrentPage;
        that.load.request(requestUrl, function () {
            that.data.goodsCurrentPage++;
        });
    },

    requrstHomePage: function() {
        var that = this;
        wx.request({
            url: that.data.url + '/api/index/homePage',
            method: 'GET',
            success: function (res) {
                if (res.statusCode != 200 || res.data.status != 1) {
                    //弹框提醒
                    return false;
                }
                that.setData({
                    homeData: res.data.result
                });
                that.data.goodsCurrentPage++;
                setTimeout(function () {
                    that.setData({
                        loadingHidden: true
                    })
                }, 1500);
            }
        });
    },
    scrollMove:function(e){
        this.setData({
            scrollTop:e.detail.scrollTop 
        });
    }
});
