var app = getApp();
var load = require('../../../utils/loadMore.js');

Page({
    data: {
        url: app.globalData.url,
        resourceUrl: app.globalData.resourceUrl,
        requestData: null,
        tabType: '',
        goodsCurrentPage: 1
    },

    load: load,

    onLoad: function () {
        this.load.init(this, 'groups', 'requestData');
        this.requestGroupBuy(this.data.tabType);
    },

    changeTab: function (event) {
        var tabType = '';
        if (event.target.id == 'tab_new') {
            tabType = 'new';
        } else if (event.target.id == 'tab_comment') {
            tabType = 'comment';
        }
        //重置数据
        this.load.resetConfig();
        this.data.tabType = tabType;
        this.data.requestData = null;
        this.data.goodsCurrentPage = 1;
        this.requestGroupBuy(tabType);
    },

    requestGroupBuy: function (tabType) {
        var that = this;
        var requestUrl = that.data.url + '/api/activity/group_list';
        if (tabType) {
            requestUrl += '/type/' + tabType;
        }
        requestUrl = requestUrl + '?p=' + that.data.goodsCurrentPage;
        this.load.request(requestUrl, function () {
            that.data.goodsCurrentPage++;
        });
    },

    loadMoreGoods: function (event) {
        if (this.load.canloadMore(event)) {
            this.requestGroupBuy(this.data.tabType);
        }
    },
});