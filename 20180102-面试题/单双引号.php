<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2018/1/2
 * Time: 下午7:20
 */
$name = 'hello';
$abc = "my name is Tom";

echo $name;
echo '<br>';
echo $abc;
echo "<br>";
echo '$name';//显示出来的是:变量$name
echo '<br>';
echo "$name";//显示出来的是:hello
echo '<hr>';

$names = "hello,'$abc'";
echo $names;//显示出来的结果是:hello,'my name is Tom'
echo '<hr>';

echo "$name,$abc";//显示结果:hello,my name is Tom
echo '$name,\"$abc\"';//显示结果:$name,\"$abc\"
echo '<br>';
echo "$name,\'$abc\'";//显示结果:hello,\'my name is Tom\'
echo '<br>';
echo "$name,\"$abc\"";//显示结果是:hello,"my name is Tom"
echo '<hr>';

echo "She said,\"How are you?\"";//显示结果:She said,"How are you?"
echo '<br>';
echo 'She said,\"How are you?\"';//显示结果:She said,\"How are you?\"
echo '<br>';
echo "She said,\'How are you?\'";//显示结果:She said,\'How are you?\'
echo '<br>';
echo 'I\'m just ducky.';//显示结果:I'm just ducky.
echo '<hr>';