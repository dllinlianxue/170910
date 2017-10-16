<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/10/10
 * Time: 上午10:18
 */
//遍历索引数组

$arr = array('zhangsan','lisi','wangwu');
for ($i = 0 ; $i < count($arr) ; $i++) {

    echo  $arr[$i] . '<br>';

}





//遍历关联数组

$arr2 = array(
    'name' => 'Tom',
    'age' => '14',
    'sex' => '男'

);

foreach ($arr2 as $key => $value) {
//    echo $key . '<br>';
//    echo $value . '<br>';
    echo  $key . "," . $value . '<br>';

}







