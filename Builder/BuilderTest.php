<?php
/**
 * Created by PhpStorm.
 * User: zimo
 * Date: 2016/12/14
 * Time: 14:59
 */

namespace Builder;
//use Builder\Director;
//use Builder\ConcreteBuilderA;
//use Builder\ConcreteBuilderB;
//use Builder\Project;

class BuilderTest
{
    private $director;

    public function __construct()
    {
        $this->director = new Director();
    }

    public function test(){
        $builderA = new ConcreteBuilderA();
        $builderB = new ConcreteBuilderB();

        $this->director->build($builderA);
        $projectA = $builderA->getProject();
        $projectA->show();

        $this->director->build($builderB);
        $projectB = $builderB->getProject();
        $projectB->show();
    }

}

$testBuilder = new BuilderTest();
$testBuilder->test();