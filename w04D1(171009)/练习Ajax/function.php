<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/10/9
 * Time: 下午8:06
 */
function show($status, $msg)
{

    // 关联数组
    $arr = array(
        'status' => $status,
        'msg' => $msg
    );

    $item2 = $arr['status'];




    //索引数组
    $arr2 = array(
        'tom', 'zhangsan', 'lisi'
    );

    $item1 = $arr2[1];



    $arr3 = [
        'tom', 'zhangsan', 'lisi'
    ];



    echo json_encode($arr);
}