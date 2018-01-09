<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/12/21
 * Time: 下午3:02
 */
namespace mysql;

class DB {
    //属性 类里的属性可以在任何地方调用
    protected $res;

    public function __construct($db=[])
    {
        //变量 只可以在此区域使用
        $this->res = mysqli_connect($db['host'],$db['username'],$db['password'],$db['dbname']) or die(mysqli_connect_error());
    }

    //方法  形参
    //增加
    public function insertToDB($query)
    {
        return mysqli_query($this->res,$query);
    }

    //改
    public function updateTODB($sql)
    {
        return mysqli_query($this->res,$sql);
    }

    //查
    public function selectToDB($sel)
    {
        return mysqli_query($this->res,$sel);
    }
    //删
    public function deleteToDB($del)
    {
        return mysqli_query($this->res,$del);
    }


}