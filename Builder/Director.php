<?php
/**
 * Created by PhpStorm.
 * User: zimo
 * Date: 2016/12/14
 * Time: 13:22
 */

namespace Builder;


class Director
{
    public function build(IBuilder $builder){
        $builder->BuilderPartA();
        $builder->BuilderPartB();
        $builder->BuilderPartC();

        return $builder->getProject();
    }

}