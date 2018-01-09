<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2018/1/8
 * Time: 下午2:23
 */
function show ($status,$msg) {
//    $arr = [
//      'status' => $status,
//      'msg' => $msg
//    ];
    $arr = array (
       'status' => $status,
       'msg' => $msg
    );

    echo json_encode($arr);
}