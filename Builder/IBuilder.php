<?php
/**
 * Created by PhpStorm.
 * User: zimo
 * Date: 2016/12/14
 * Time: 13:22
 */

namespace Builder;


interface IBuilder
{

    public function BuilderPartA();
    public function BuilderPartB();
    public function BuilderPartC();
    public function getProject();
}