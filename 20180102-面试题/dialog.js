var dialog = {
    success:function (msg,url) {
        layer.open ({
            title:'',
            content:msg,
            icon:1,
            yes:function () {
                window.location.href = url
            }
        });
    },
    error:function (msg) {
        layer.open ({
            titil:'',
            content:msg,
            icon:1
        });
    }
};