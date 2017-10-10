var app = getApp();
var load = require('../../../utils/loadMore.js');

Page({
    data: {
        url: app.globalData.url,
        resourceUrl: app.globalData.resourceUrl,
        requestData: null,
        brandCurrentPage: 1
    },

    load: load,

    onLoad: function () {
        this.load.init(this, 'brand_list', 'requestData');
        this.requestBrandStreet();
    },

    requestBrandStreet: function () {
        var that = this;
        var requestUrl = that.data.url + '/api/index/brand_street' + '?p=' + that.data.brandCurrentPage;
        that.load.request(requestUrl, function () {
            that.data.brandCurrentPage++;
        });
    },

    loadMoreBrand: function (event) {
        if (this.load.canloadMore(event)) {
            this.requestBrandStreet();
        }
    }
});