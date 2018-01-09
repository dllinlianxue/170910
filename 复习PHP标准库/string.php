<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/11/22
 * Time: 下午6:50
 */
//判断一个字符串里是否包含另一个特定的子串
$string = 'welcome to china';
if (strpos($string,'to') === false) {
   echo 'no';
}
else {
    echo 'yes';
}

echo '<hr>';

//查找字符串首次出现的位置?
$string = 'welcome to china to';
echo strpos($string,'to',9);
//从第17个的下一个开始偏移
echo '<hr>';
echo strpos($string,'to',5);
echo strpos($string,'to');
//返回 needle 在 haystack 中首次出现的数字位置。
//打印出的是8

echo '<hr>';

//抽取字符串其中一部分
//返回字符串 string 由 start 和 length 参数指定的子字符串
$string = 'string';
echo substr($string,2,4);
//不包括第二个字符

echo '<hr>';

//替换字符串
$string = '345678909876543';
echo substr_replace($string,'****',strlen($string)-4);//后4位被替换
echo substr_replace($string,'***',-5);//负数是从后面开始的第几个数替换,长度没有关系
echo '<hr>';
echo substr_replace($string,'****',4,strlen($string)-8);
echo substr_replace($string,'***',4,-4);
//开始留4位,长度减去几就是留几位数(因为前面已经是4个数了,从后面再数四个数位
echo '<hr>';
echo substr_replace($string,'****',6);//就是除了前6位数都替换
echo '<hr>';
echo substr_replace($string,'***',4,5);//就是从第五个开始的五个数替换


echo '<hr>';

//逐个字节处理子串
//strstr 查找字符串的首次出现?,区分大小写;stristr 不区分大小写
$string = 'welcome to china to';
echo strstr($string,'to');
//返回 haystack 字符串从 needle 第一次出现的位置开始到 haystack 结尾的字符串。
//打印出来的是:to china to
echo '<hr>';
//查字符串里有几个元音字母
$string = 'welcome';
$count = '';
for ($i=0;$i < strlen($string);$i++){
    if (strstr('aeiouAEIOU',$string[$i])){
        $count++;
    }
}
echo $count;
echo '<hr>';
//??????????????????
$string = 'welcome';
$count = '';
for ($i=0;$i < strlen($string);$i++){
    if (strpos('aeiouAEIOU',$string[$i])){
        $count++;
    }
}
echo $count;

echo '<hr>';

//按单词或字节反转字符串:
// strrev():返回string反转后的字符串;
// explode():此函数返回由字符串组成的数组，每个元素都是 string 的一个子串，它们被字符串 delimiter 作为边界点分割出来;
// array_reverse():array_reverse() 接受数组 array 作为输入并返回一个单元为相反顺序的新数组。
// implode():
$string = 'word and string';
echo strrev($string) . '<br>';
echo implode(' ',array_reverse(explode(' ',$string))) . '<br>';


//分解字符串:
// explode():此函数返回由字符串组成的数组，每个元素都是 string 的一个子串，它们被字符串 delimiter 作为边界点分割出来;
//preg_split():array preg_split ( string $pattern , string $subject [, int $limit = -1 [, int $flags = 0 ]] )
$string = 'word and string';
$res = explode(' ',$string);
var_dump($res);

echo '<hr>';

//生成随机字符串:
//mt_rand():
//str_rand():
function str_rand($length = 2,$chas = 'juab'){
    $string = '';
    for ($i = $length; $i > 0; $i--){
        $string .= $chas[mt_rand(0,strlen($chas)-1)];
    }
    return $string;
}
echo str_rand();

echo '<hr>';

$string = mt_rand(10,99);//随机生成数字
echo $string;





