<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/11/23
 * Time: 下午7:14
 */
include ('ObjController.class.php');

$obj = new person();
$obj -> setId(1);
$obj -> setName('lisi');



$obj1 = clone $obj;
$obj1 ->setId(2);
$obj1 ->setName('zhangsan');

print $obj->getId() . '' . $obj->getName() . '<br>';
print $obj1->setId() . '' . $obj1->getName();

