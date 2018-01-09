<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/11/25
 * Time: 下午2:51
 */
abstract class Database {
    abstract public function connect($server,$username,$password,$database);
    abstract public function query($sql);
    abstract public function fetch();
    abstract public function close();
}

class Mysql extends Database {
    protected $dbh;
    protected $query;

    public function connect($server, $username, $password, $database)
    {
        // TODO: Implement connect() method.
        $this->dbh = mysqli_connect($server,$username,$password,$database);
    }
    public function query($sql)
    {
        // TODO: Implement query() method.
        $this->query = mysqli_query($this->dbh,$sql);
    }
    public function fetch()
    {
        // TODO: Implement fetch() method.
        return mssql_fetch_row($this->dbh,$this->query);
    }
    public function close()
    {
        // TODO: Implement close() method.
        mysqli_close($this->dbh);
    }
}