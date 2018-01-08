<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/12/22
 * Time: 下午6:26
 */
require_once('Medoo.php');

use \Medoo\Medoo;

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'test',
    'server' => '127.0.0.1',
    'username' => 'root',
    'password' => '123456'
]);

$database->insert("TB_type", [
    'name' => '浮点类型',
    'content' => 'flaot'
]);