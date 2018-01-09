/**
 * Created by intern on 2017/9/29.
 */
var dialog = {
    success: function (message,url) {
        layer.open({
            icon: 1,
            title: '提示',
            content: message,
            yes: function () {
                window.location.href = url;
            }
        });
    },

    error: function (message) {
        layer.open({
            icon: 2,
            title: '错误提示',
            content: message
        });
    }
};