<?php
/**
 * Created by PhpStorm.
 * User: zimo
 * Date: 2016/12/14
 * Time: 20:24
 */

require_once "Prototype.php";


class ConcretePrototype implements Prototype
{

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function copy()
    {
        /*
         * 深拷贝
         */
        $serialize_obj = serialize($this);
        $clone_obj = unserialize($serialize_obj);
        return $clone_obj;


        //浅拷贝
//        return clone $this;
    }

}