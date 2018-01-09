<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/11/11
 * Time: 上午10:51
 */
setcookie('name','tom');
setcookie('password',md5('1234'));

echo '<h1>hello,world</h1>';

$name = $_COOKIE['name'];


var_dump($_COOKIE);