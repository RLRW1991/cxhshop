var app = getApp();
Page({
    data: {
        url: app.globalData.url,
        resourceUrl: app.globalData.resourceUrl,
        requestData: null
    },

    onLoad: function (options) {
        this.requestOrderDetail(options.order_id)
    },

    requestOrderDetail: function (order_id) {
        var that = this;
        wx.request({
            url: that.data.url + '/api/order/order_detail?id=' + order_id,
            method: 'GET',
            success: function (res) {
                //console.log(res);
                if (res.statusCode != 200 || res.data.status != 1) {
                    wx.showModal({
                        content: res.data.msg,
                        showCancel: false
                    });
                    return false;
                }
                that.setData({
                    requestData: res.data.result
                });
            },
            fail: function (res) {
                console.log(res);
                wx.showModal({
                    content: '请求失败',
                    showCancel: false
                });
            }
        });
    },

    contactService: function () {
        wx.showModal({
            content: '请联系客服：123456789',
            showCancel: false
        })
    }
});