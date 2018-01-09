<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/11/23
 * Time: 下午4:04
 */

class user {
  protected $name;

  public function setName($name){
      $this->name = $name;
  }
  public function getName(){
      return $this->name;
  }
};

class person {
    protected $id;
    protected $user;

    public function __construct()
    {
        $this->user = new user();

    }
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        if (method_exists($this->user,$name)){
            return call_user_func_array(array($this->user,$name),$arguments);
        }
    }
    public function __clone()
    {
        // TODO: Implement __clone() method.
        $this->user = clone $this->user;
    }
}
