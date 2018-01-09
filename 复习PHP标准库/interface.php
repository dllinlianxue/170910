<?php
/**
 * Created by PhpStorm.
 * User: intern
 * Date: 2017/11/25
 * Time: 下午1:32
 */
interface NameInterface {
    public function getName();
    public function setName($name);

}

class Book implements NameInterface {
    private $name;
    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }
    public function setName($name)
    {
        // TODO: Implement setName() method.
        return $this->name = $name;
    }
}
class cup implements NameInterface {
    private $name;
    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }
    public function setName($name)
    {
        // TODO: Implement setName() method.
        return $this->name = $name;
    }

}