<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/10/9
 * Time: 下午6:50
 */
//function show ($status,$msg) {
//    $arr = array(
//      'status'=> $status,
//        'msg' => $msg
//    );
//    echo json_encode($arr);
//}
//function show ($status,$msg) {
//    $arr = array(
//      'status' => $status,
//        'msg' => $msg
//    );
//    echo json_encode($arr);
//}
function show ($status,$msg) {
    $arr = array(
        'status' => $status,
        'msg' => $msg
    );
    echo json_encode($arr);
}