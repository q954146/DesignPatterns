<?php
/**
 * Created by PhpStorm.
 * User: zimo
 * Date: 2016/11/30
 * Time: 17:59
 */

namespace Singleton;


class Singleton{
    private static $instance;

    /**
     * 通过延时加载获得实例
     * @return self
     */
    public static function getInstance(){
        if (static::$instance == null){
            static::$instance = new static();
        }
        return static::$instance;
    }

    /**
     * Singleton constructor.
     * 私有类型构造方法，不可被调用创建
     */
    private function __construct()
    {
    }

    /**
     * 防止被克隆
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * 防止被反序列化
     */
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

}