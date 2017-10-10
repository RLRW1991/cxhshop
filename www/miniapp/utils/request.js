var util = require('util.js');

module.exports = {
    request: function (method, url, options) {
        var that = this;
        var header = (typeof options.header != 'undefined') ? 
            options.header : { "content-type": "application/x-www-form-urlencoded"};
        var data = (typeof options.data != 'undefined') ? util.json2Form(options.data) : options.data;
        wx.request({
            url: url,
            method: method,
            data: data,
            header: header,
            success: function (res) {
                console.log(res);
                if (res.statusCode != 200) {
                    wx.showModal({
                        content: '请求出错[' + res.statusCode + ']',
                        showCancel: false
                    });
                    return false;
                }
                if (res.data.status != 1) {
                    var msg;
                    if (typeof res.data.msg == 'string') {
                        msg = res.data.msg;
                    } else {
                        msg = '数据格式错误';
                    }
                    wx.showModal({
                        content: msg,
                        showCancel: false
                    });
                    return false;
                }
                if (typeof options.success == 'function') {
                    options.success(res);
                }
            },
            fail: function (res) {
                console.log(res);
                var ret = true;
                if (typeof options.fail == 'function') {
                    ret = options.fail(res);
                }
                if (ret == false) {
                    return false;
                }
                wx.showModal({
                    content: '请求失败',
                    showCancel: false
                });
            }
        });
    },
    get: function (url, options) {
        this.request('GET', url, options);
    },
    post: function (url, options) {
        this.request('POST', url, options);
    }
};