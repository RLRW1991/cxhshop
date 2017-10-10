var app = getApp();
var load = require('../../../utils/loadMore.js');

Page({
    data: {
        url: app.globalData.url,
        resourceUrl: app.globalData.resourceUrl,
        requestData: null,
        rankType: '',
        goodsCurrentPage: 1
    },

    load: load,

    onLoad: function () {
        this.load.init(this, 'goods_list', 'requestData');
        this.requestIntegralMall(this.data.rankType);
    },

    changeTab: function(event) {
        var rank = '';
        if (event.target.id == 'rank_num') {
            rank = 'num';
        } else if (event.target.id == 'rank_integral') {
            rank = 'integral';
        }
        this.load.resetConfig();
        this.data.rankType = rank;
        this.data.requestData = null;
        this.data.goodsCurrentPage = 1;
        this.requestIntegralMall(rank);
    },

    requestIntegralMall: function(rank) {
        var that = this;
        var requestUrl = that.data.url + '/api/goods/integralMall';
        if (rank) {
            requestUrl += '/rank/' + rank;
        }
        requestUrl = requestUrl + '?p=' + that.data.goodsCurrentPage;
        this.load.request(requestUrl, function() {
            that.data.goodsCurrentPage++;
        });
    },

    loadMoreGoods: function(event) {
        if (this.load.canloadMore(event)) {
            this.requestIntegralMall(this.data.rankType);
        }
    },
});