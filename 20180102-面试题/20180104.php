<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2018/1/4
 * Time: 上午9:47
 */
$num = '1d9';
echo ++$num;

echo '<hr>';

$a = 1;
echo ++$a;
echo '<hr>';

$tmp = 0 == "a" ? 1: 2;
echo $tmp;
echo '<hr>';

function hou($n,$m){
    $r = 0 ;
    for ($i=2;$i<=$n;$i++){
        $r=($r+$m)%$i;
    }
    return $r+1;
}
echo (hou(6,4));
echo '<hr>';


$arr = ['1','2'];
var_dump($arr);
foreach ($arr as $key=>$value){
    if ($key==0){
        $a = 'baidu';
    }
    elseif ($key==1){
        $b = '333';
    }
    var_dump($a);
    var_dump($b);
}


$a = "hello";
$b = &$a;
unset($b);
$b = "world";
echo $a;


echo date("Y-m-d H:i:m",strtotime("-1 day"));

//有疑问
//class Test{
//    public function __get($str)
//    {
//        // TODO: Implement __get() method.
//        echo 'access__get::' .$str. '--->';
//        return ['fd'=>'hy'];
//    }
//}
//$b = new Test();
//var_dump($b->member);
//
//$a = 0;
//switch ($a){
//    case $a>=0;
//    echo 0;
//    break;
//    case $a>=10;
//    echo 1;
//    break;
//
//    default;
//    echo 2;
//    break;
//}
//exit();//打印结果:1














