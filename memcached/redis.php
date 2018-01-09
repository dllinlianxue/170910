<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/12/29
 * Time: 下午4:59
 */
//创建对象Redis
$Redis = new Redis();
//连接Redis服务
$Redis -> connect('127.0.0.1',6379) or die('连接Redis服务失败');
$Redis -> set('test','welcome to dalian');

echo $Redis->get('test');