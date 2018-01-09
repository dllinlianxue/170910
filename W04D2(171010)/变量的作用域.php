<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/10/10
 * Time: 上午9:33
 */
//全局变量
$name = 'Tom';

function displayName () {

    //在函数中不能直接使用全局变量,如果要使用,加上global关键字
    global $name;
    echo "Name is $name";
}
displayName();

echo "Name is $name";


//static静态变量,函数调用完毕,变量值保留,内存不释放
function plus() {
    static $x = 0;
    echo $x;
    $x++;
}
plus();
plus();
plus();
plus();

