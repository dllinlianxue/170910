<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/10/9
 * Time: 上午9:41
 */
/**php中有4个函数是向页面输出内容
*1.echo  函数. 主要输出内容,最常用(可以多个)
*2.printf 函数
*3.print_r 函数
*4.var_dump 函数.主要用于调试,输出变量
 */
echo 'hello';
echo '<hr>';
echo '<h1>hello</h1>';

echo '<hr>';
/**
 * php有两个超级全局数组 $_post,$_get,里面是从前端传来的数据
 */
echo '<h3>输出$_POST变量,观察变量里面的内容</h3>';
 var_dump($_POST);
 /* 关联数组
 *string类型(字符串)
  * 请求Repuest
  * 响应Response
  */
 echo '<hr>';
/**
 * 获取用户名和密码,进行判断,根据结果返回前端不同的值
 */
$username = $_POST['username'];
$password = $_POST['password'];
/*$username变量名
*/
echo '$username';//单引号不解析变量
echo '<br>';
echo "$username";//双引号解析变量
/* 单引号当成字符串输出,双引号输出里面的变量
*/
echo '<p class="p1">abce</p>';
/*单,双引号嵌套时交叉使用
/*判断*/
if ($username == 'Tom') {
    if ($password == '123456') {
        echo '登陆成功';

    }else {
        echo '密码错误';
    }
}else {
    echo '该用户不存在';
}
/* 前段数据到后台
* 1.HTML<form>整个页面刷新
 * 2.JavaScript局部数据更新
 * (web APIs:XMLHttpRequest)原生的Ajax技术
 * JQuery版本的Ajax
 */
































