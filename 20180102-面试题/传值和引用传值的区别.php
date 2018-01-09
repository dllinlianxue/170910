<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2018/1/3
 * Time: 下午6:09
 */
//传值:
$a = 1;
$b = 2;

$b = $a;
echo $b;//打印结果是:1
echo '<hr>';

//引用传值:
$a1 = 3;//定义变量a1
$a2 = &$a1;//将变量a1的引用传给变量2
echo $a2;//显示:3
$a2 = 4;//给a2赋个值:4
echo $a2;//显示:4
echo $a1;//显示:4


