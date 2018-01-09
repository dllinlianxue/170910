<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/10/9
 * Time: 上午11:23
 */
/** 如何获取从前端发来的数据
 * 后台脚本不判断是通过form还是Ajax传来的数据,只分POST还是GET方式
 */
//var_dump($_POST);
//导入function.php文件
//once避免重复导入
//导入文件的本质,就是把文件代码粘贴过来
require_once 'function.php';
//include_once 'function.php';
//require 'function.php';//如果有问题会提示,同时下面PHP的代码不执行
//include 'function.php';//如果有问题会提示,但不影响下面的PHP代码

$username = $_POST['username'];
$password = $_POST['password'];


if ($username == 'Tom') {

    if ($password == '123456') {
        //返回JSon数据
       show(1,'欢迎登陆');

    } else {
        //返回json数据
       show(0,'密码错误');
    }
} else {
    //返回json数据
    show(0,'用户不存在');
}
