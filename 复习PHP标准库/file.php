<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/11/24
 * Time: 下午5:21
 */

$file = ('index.html');
$content = ('<h1>hello</h1>');

file_put_contents($file,$content) or die ('Error to Write');