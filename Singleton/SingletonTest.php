<?php
/**
 * Created by PhpStorm.
 * User: zimo
 * Date: 2016/11/30
 * Time: 20:22
 */

namespace Singleton;


class SingletonTest extends \PHPUnit_Framework_TestCase{

    /**
     * 测试唯一性
     */
    public function testUniqueness(){
        $firstCall = Singleton::getInstance();
        $this->assertInstanceOf('Singleton',$firstCall);
        $secondCall = Singleton::getInstance();
        $this->assertSame($firstCall,$secondCall);
    }

    /**
     * 测试构造方法为私有类型
     */
    public function testNoConstructor(){
        $obj = Singleton::getInstance();
        $refl = new \ReflectionObject($obj); //反射obj
        $meth = $refl->getMethod('__construct');
        $this->assertTrue($meth->isPrivate());
    }
}
