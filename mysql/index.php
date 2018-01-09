<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/12/21
 * Time: 下午3:53
 */
include_once ('mysql.php');
use mysql\DB;
//当创建对象的时候,数据库已经连接好
$mysql = new DB([
    'host' => '127.0.0.1',
    'username' => 'root',
    'password' => '123456',
    'dbname' => 'test',
]);
//进行增加数据库数据  调用insertToMysql()方法
$query = $mysql->insertToDB('insert into TB_type (content) VALUE ("zhangsan")');

$sql = $mysql->updateTODB('UPDATE TB_type SET content="zhangsan" WHERE content="lisi"');

var_dump($sql);

$sel = $mysql->selectToDB("select content from TB_type");

var_dump($sel);

$del = $mysql->deleteToDB("DELETE FROM TB_type WHERE content='zhangsan'");
