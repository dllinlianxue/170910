<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/11/22
 * Time: 下午2:27
 */
class DB {
    private $_db;
    //代码规范,私有属性习惯使用 开头

    private $_db_config = [

        'DB_HOST' => '127.0.0.1',
        'DB_USER' => '',
        'DB_PASSWORD' => '',
        'DB_NAME' => ''
    ];

    //构造函数,自动调用,new 对象的时候自动调用
    public function __construct()
    {
        echo '对象创建';

        $db_config = include('db.php');

        //合并数组 (+合并:前面数组覆盖后面的数组;  array_merge合并:后面数组覆盖前面的数组
        $this->_db_config = $db_config + $this->_db_config;

       $this->_db = mysqli_connect(

           $this->_db_config['DB_HOST'],
           $this->_db_config['DB_USER'],
           $this->_db_config['DB_NAME'],
           $this->_db_config['DB_PASSWORD']

       ) or die(mysqli_connect_error());
    }

    public function checkName($name) {

        $query = '';
        $res = mysqli_query();

    }

    //析构函数,自动调用,对象销毁时自动调用
    public function __destruct()
    {
        echo '对象销毁';
        // TODO: Implement __destruct() method.
        if ($this->_db){

            mysqli_close($this->_db);

        }
    }
}