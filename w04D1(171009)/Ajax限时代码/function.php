<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/10/10
 * Time: 上午8:12
 */

function show ($status,$msg) {
    $arr = array(
         'status' => $status,
         'msg' => $msg
    );
    echo json_encode($arr);

}