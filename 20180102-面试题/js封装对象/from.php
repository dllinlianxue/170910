<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2018/1/8
 * Time: 下午2:23
 */
require_once 'function.php';

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'tom') {
    if ($password === '123') {
        show(1,'登陆成功');
    } else {
        show(0,'密码错误');
    }
} else {
    show(0,'用户名错误');
}