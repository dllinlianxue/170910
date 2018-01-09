<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/10/12
 * Time: 上午8:29
 */
$dbc = mysqli_connect('127.0.0.1','root','123456','demo') or die(
'Error to Connect Mysqli');

$query = 'SELECT * FROM student';

$result = mysqli_query($dbc,$query);

//var_dump($result);
$num = mysqli_num_rows($result);

var_dump($num);