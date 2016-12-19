<?php
/**
 * Created by PhpStorm.
 * User: zimo
 * Date: 2016/12/19
 * Time: 17:19
 */

require_once "Demo.php";
require_once "ConcretePrototype.php";

class Client
{

    public static function main(){

        $demo = new Demo();
        $demo->array = [1,2];

        $object1 = new ConcretePrototype($demo);
        $object2 = $object1->copy();

        var_dump($object1->getName());
        echo "<br>";
        var_dump($object2->getName());
    }

}

Client::main();