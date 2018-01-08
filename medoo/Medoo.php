<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/12/22
 * Time: 下午4:01
 */

namespace Medoo;
use PDO;
use PDOException;
class Medoo
{
    protected $type;
    protected $pdo;
    protected $option = [];
    protected $prefix;
    protected $logging;

    public function __construct($options = null)
    {
        //如果这个选项(参数)不是数组,返回错误提示
        if (!is_array($options)) {
            return false;
        }

        //如果设置了数据库的类型,就转化成小写
        if (isset($options['database_type'])) {
            $this->type = strtolower($options['database_type']);
        }

        if (isset($options['prefix'])) {
            $this->prefix = $options['prefix'];
        }

        if (isset($options['option'])) {
            $this->option = $options['option'];
        }

        if (isset($options['logging']) && is_bool($options['logging'])) {
            $this->logging = $options['logging'];
        }

        //如果参数设置这个命令和这个参数命令是个数组
        if (isset($options['command']) && is_array($options['command'])) {
            $commands = $options['command'];
        } else {
            $commands = [];
        }

        if (isset($options['dsn'])) {
            if (is_array($options['dsn']) && isset($options['dsn']['driver'])) {
                $attr = $options['dsn'];
            }
            return false;
        } else {
            if (isset($options['port']) && is_int($options['port'] * 1)) {
                $port = $options['port'];
            }
            $is_port = isset($port);
            switch ($this->type) {
                case 'mysql':
                    $attr = [
                        'driver' => 'mysql',
                        'daname' => $options['database_name']
                    ];
                    if (isset($options['socket'])) {
                        $attr['unix_socket'] = $options['socket'];
                    } else {
                        $attr['host'] = $options['server'];
                        if ($is_port) {
                            $attr['port'] = $port;
                        }
                    }
                    $commands[] = 'SET SQL_MODE=ANSI_QUOTES';
                    break;
            }
        }
        $driver = $attr['driver'];
        unset($attr['driver']);
        $stack = [];
        foreach ($attr as $key => $value) {
            $stack[] = is_int($key) ? $value : $key . '=' . $value;
        }
        $dsn = $driver . ':' . implode($stack, ':');
        if (in_array($this->type, ['mysql']) && isset($options['charset'])) {
            $commands[] = "SET NAMES '" . $options['charset'] . "'";
        }

        try {
            $this->pdo = new PDO(
                $dsn,
                isset($options['username']) ? $options['username'] : null,
                isset($options['password']) ?$options['password'] :null,
                $this->option
            );

            foreach ($commands as $value) {
                $this->pdo->exec($value);
            }
        }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }

    public function insert()
    {

    }

}