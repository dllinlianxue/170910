<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/10/9
 * Time: 下午6:49
 */
require_once 'function.php';

$username = $_POST['username'];
$password = $_POST['password'];


if ($username === 'Tom') {

    if ($password === '123') {

        show(1,'欢迎登陆');

    } else {
        show(0,'密码错误');
    }

} else {
        show(0,'用户名不正确');
}