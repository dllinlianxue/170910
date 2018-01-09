<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/11/22
 * Time: 下午6:50
 */
//21:查找两个数组的并集,交集,差集:
//array_unique:移除数组中重复的值
//array_intersect:计算数组的交集
//array_diff:计算数组的差集
//array_merge:合并一个或多个数组

$a = ['a','v','c','e'];
$b = ['a','e','g','h'];
$res = array_unique(array_merge($a,$b));
$string = implode($res);
//把两个数组合并成一个字符串
$str = join(' ',$a);
//将数组转化为字符串
var_dump($res);
var_dump($string);
var_dump($str);

echo '<hr>';

//迭代处理数组:可以处理其中所有或部分元素
$a = ['v','i','e'];
var_dump($a);
$new_a = [];
foreach ($a as $value){
    $new_a[] = $value . 't';
}//改变成一个新的数组,在原来的数组上都拼接了一个't'
var_dump($new_a);

unset($a[0]);
//从数组删除一个元素

array_splice($a,count($a),0,array('g','l','p','o'));//增加数组元素
var_dump($a);

array_splice($a,2,1,'bc');
var_dump($a);
//array_splice():把 input 数组中由 offset 和 length 指定的单元去掉(由长度决定)，如果提供了 replacement 参数，则用其中的单元取代;
array_splice($a,2,3,'w');
var_dump($a);
// array_shift():删除第一个元素
// array_pop():删除最后一个元素
//array_pad():
$a = array_pad($a,6,'y');
//在原有的数组数量上,可以一次加一个或多个数组 ====> 改变数组大小
var_dump($a);

$num = range(1,10);
var_dump($num);

$names = [
    'class_1' => ['zhangsan','lisi'],
    'class_2' => ['tom','yy','zz']
];
var_dump($names);

//array_key_exists():检查一个键,无关关联的值 isset():查找关联值非null的一个键  in_array():in_array_case():不区分大小写 array_map():
$names = [
    'id' => 1,
    'name' => 'lisi',
    'age' => ''
];

if (array_key_exists('age',$names)){
    echo 'ok';
}
if (isset($names['age'])){
    echo 'isset';
} else {
    echo 'not isset';
}

if (in_array(1,$names)){
    echo 'yes';
}

//array_search():查找一个值在数组中的位置
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key1 = array_search('green', $array); // $key = 2;
$key2 = array_search('red', $array);   // $key = 1;

echo $key1 . ' and ' . $key2;

//array_filter()
echo '<hr>';

$num = range(1,10);
shuffle($num);
foreach ($num as $res){
    echo "$res";
}

$array = ['a','e','i','p'];
shuffle($array);
var_dump($array);


$array = [''];

















