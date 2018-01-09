$(document).ready(function () {
   //搜索框
    $('#serach .sou .sousuo input .kuang').focus(function () {
        $(this).val('');
    }).blur(function () {
        $(this).val('跨界');
    });
    //京东小金库和七日年化图片定时切换
    var dhtuIndex = 1;
    setInterval(function () {
        $('#daohang .dhright .dhtu ul li').eq(dhtuIndex).addClass('on').sibling().removeClass('on');
        //取反
        dhtuIndex = !dhtuIndex;
    },2000);
    //大轮播图
    var lbIndex = 0;
    var lbTimerId = setInterval(lunbo,2000);
    function lunbo() {
        lbIndex = (lbIndex >= $('#main .mainleft .lunbo .pic li').length-1)?0:++lbIndex;
        currentImg(lbIndex);
    }
});