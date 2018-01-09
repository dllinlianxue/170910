<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/11/22
 * Time: 上午11:21
 */
include('DB.class.php');
//从$_get 获取数据 name password

$name = $_GET['name'];
$password = $_GET['password'];


//数据库查询,相关的逻辑代码封装在对象中

 $db = new DB();
 $db->checkName($name);

//生成HTML页面返回前端


