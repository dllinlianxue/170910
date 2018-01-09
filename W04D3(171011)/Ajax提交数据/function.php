<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/10/9
 * Time: 下午2:10
 */
function show($status,$msg) {
    $arr = array (
      'status' => $status,
        'msg' => $msg
    );
//    $arr = ['status' => $status,
//           'msg' => $msg
//    ];
    echo json_encode($arr);


}