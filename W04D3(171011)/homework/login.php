<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/10/11
 * Time: 下午4:53
 */
$username = $_POST['username'];
$password = $_POST['password'];

$dbc = mysqli_connect('127.0.0.1','root','123456','demo')
or die('Error to Connect Mysql');

$query = "SELECT username,password FROM account WHERE username='" . $username . "'";

$result = mysqli_query($dbc,$query) or die('Error to Query');

$num = mysqli_num_rows($result);

if ($num == 0) {
    echo '用户不存在';
} else {
    $row = mysqli_fetch_array($result);
    if ($row['password'] == md5($password) ) {
        echo '欢迎登陆';
    } else {
        echo '密码错误';
    }
}


mysqli_close($dbc);
