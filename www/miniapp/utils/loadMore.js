/**
 * 用来增量请求页面数据
 */
module.exports = {
    data: {
        page: null, //依附的页面
        listName: '',
        resultName: '',
        resultListName: '',
        scrollHeight: 0,  //窗口的高度，用于滚动配置，wxml需要引用在scroll-view
        scrollTimeStamp: 0, //事件时间戳，用于去动
        goodsLoadFinishFlag: false, //加载完成标志
        goodsLoading: false //正在加载中标志
    },

    /**
     * onload中调用：用于初始化加载相关配置
     * page:闯入当前页面，一般用this
     * listName：请求的结果result中列表数据所在的属性名或键值
     * resultName：保存在page页面data中请求数据result所在的属性名
     * resultListName：保存在page data中resultName中的列表数据的属性名，不填与listName一致
     */
    init: function (page, listName, resultName, resultListName) {
        console.log('loadMore init');
        this.data.page = page;
        this.data.listName = listName;
        this.data.resultName = resultName;
        this.data.resultListName = (resultListName == undefined) ? listName : resultListName;
        page.setData({
            scrollHeight: wx.getSystemInfoSync().windowHeight
        });
    },

    /**
     * 请求并更新列表数据
     */
    request: function (url, success, fail) {
        console.log('loadMore request enter');
        var that = this;
        if (that.data.goodsLoading) {
            //还在请求中
            return false;
        } else {
            that.data.goodsLoading = true;
        }
        
        console.log('loadMore requesting');
        wx.request({
            url: url,
            method: 'GET',
            success: function (res) {
                //console.log(res);
                var ret = true;
                if (typeof success == 'function') {
                    ret = success(res);
                }
                if (ret === false) {
                    return false;
                }

                if (res.statusCode != 200 || res.data.status != 1) {
                    wx.showModal({
                        content: res.data.msg,
                        showCancel: false
                    });
                    return false;
                }

                var inList;
                var listName = that.data.listName;
                var resultName = that.data.resultName;
                var resultListName = that.data.resultListName;
                if (listName != '') {
                    inList = res.data.result[listName];
                } else {
                    inList = res.data.result;
                }
                if (inList.length == 0) {
                    that.data.goodsLoadFinishFlag = true;
                }
                var param;
                var page = that.data.page;
                if (page.data[resultName]) {
                    if (resultListName != '') {
                        [].push.apply(page.data[resultName][resultListName], inList);
                    } else {
                        [].push.apply(page.data[resultName], inList);
                    }
                    param = page.data[resultName];
                } else {
                    param = res.data.result;
                }
                page.setData({ 
                    [resultName]: param
                });
            },
            fail: function (res) {
                var ret = true;
                console.log(res);
                if (typeof fail == 'function')  {
                    ret = fail(res);
                }
                if (ret === false) {
                    wx.showModal({
                        content: '请求失败',
                        showCancel: false
                    });
                }
            },
            complete: function (res) {
                that.data.goodsLoading = false;
            }
        });
        return true;
    },


    /**
     * 是否可以加载更多数据，加载完成或去抖返回false
     */
    canloadMore: function (event) {
        console.log('loadMore.loadMore...');
        var that = this;
        if (that.data.goodsLoadFinishFlag) {
            return false;
        }
        //console.log(event);
        //抖动时间
        if (event.timeStamp - that.data.scrollTimeStamp > 500) {
            that.data.scrollTimeStamp = event.timeStamp;
            return true;
        }
        return false;
    },

    /**
     * 重置为未加载完成，数据的重置需要手动重置
     */
    resetConfig: function () {
        this.data.goodsLoadFinishFlag = false;
    }
};