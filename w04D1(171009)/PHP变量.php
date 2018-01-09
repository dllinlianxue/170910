<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/10/9
 * Time: 下午3:38
 */
function Mytest () {
    static $x=0;
    echo $x;
    $x++;
}
Mytest();
Mytest();
Mytest();
Mytest();
?>;
<hr>
<?php
$txt1 = "hello";
$txt2 = "worde";
echo $txt1 . " " . $txt2;
?>

<hr>

<?php
//$age = array('张三'=>'34','李四'=>'32','王五'=>'31');
//foreach ($age as $x=>$x_value) {
//    echo "key=" . $x . ", value=" . $x_value;
//    echo '<br>';
//}
//?>

<?php
$age = array('张三'=>'34','李四'=>'32','王五'=>'31');
foreach ($age as $x_value) {
    echo 'key=' . $x . ', value=' . $x_value;
    echo '<br>';
}
?>


<?php
$arr = array(5,3,6,2,8,10);
for($i = count($arr)-1;$i>=0;$i--){
    for($j = 0 ; $j < $i ; $j++){
        if($arr[$j+1] > $arr[$j] ){
            $aa = $arr[$j+1];
            $arr[$j+1] = $arr[$j];
            $arr[$j] = $aa;
        }
    }
}
print_r($arr);
?>














