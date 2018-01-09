<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/10/11
 * Time: 上午10:56
 */
require_once 'head.php';
//先获取前端数据

$username = $_POST['username'];
$password = $_POST['password'];


//连接数据库进行数据相关操作(增删改查)

//连接mysql
$dbc = mysqli_connect('127.0.0.1','root',
'123456','demo') or die('Error to Connect 
MYSQL');
var_dump($dbc);
//die脚本此时停止执行

//执行sql语句
//$query = "SELECT * FROM account";

//$query2 ="INSERT INTO account(username, password) VALUES ('zhangsan',md5('111111'))";
$result = mysqli_query($dbc,$query) or die('Error to Query');

//var_dump($result);
//$result2 = mysqli_query($dbc,$query2) or die('Error to Query');
//var_dump($result2);



//$num = mysqli_num_rows($result);
//echo $num;


if (!mysqli_num_rows($result)) {
    echo '用户存在';
} else {
    echo '用户不存在';
}


//获取返回的结果集中的每行数据

//$row = mysqli_fetch_array($result);//关联数组和索引数组
//$row = mysqli_fetch_row($result);//索引数组
//$row = mysqli_fetch_assoc($result);//关联数组
//var_dump($row);



echo '<table>';
echo '<tr>';
echo '<th>id</th>';
echo '<th>username</th>';
echo '<th>password</th>';
echo '</tr>';

while ($row = mysqli_fetch_array($result)) {
//    var_dump($row);
    echo '<tr>';
    echo '<td>' . $row['account_id'] . '</td>';
    echo '<td>' . $row['username'] . '</td>';
    echo '<td>' . $row['password'] . '</td>';
    echo '</tr>';

}
//关闭mysql连接

echo '</table>';
require_once 'foot.php';

mysqli_close($dbc);

//将结果(HTML页面形式,JSON数据格式)返回给前端