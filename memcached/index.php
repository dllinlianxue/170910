<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/12/29
 * Time: 上午11:16
 */
//phpinfo();
//创建memcache对象 可以把它写在服务容器或
$memcache = new Memcache();
//连接memcache服务 需要IP地址和端口号
$memcache->connect('192.168.1.13','8888') or die('连接memcache失败');
//存储键值对 终端可以取出来
//$memcache->set('linlianxue','Dalian');
//根据key取出value
$num = $memcache->get('sunwei');

echo $num;

