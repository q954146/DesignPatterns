<?php
/**
 * Created by PhpStorm.
 * User: zimo
 * Date: 2016/12/14
 * Time: 13:27
 */

namespace Builder;


class ConcreteBuilderB implements IBuilder
{
    public $project;

    public function __construct()
    {
        $this->project = new Project();
    }

    public function BuilderPartA()
    {
        // TODO: Implement BuilderPartA() method.
        $this->project->add("PartA","BuildB_PratA");
    }

    public function BuilderPartB()
    {
        // TODO: Implement BuilderPartB() method.
        $this->project->add("PartB","BuildB_PratB");
    }

    public function BuilderPartC()
    {
        // TODO: Implement BuilderPartC() method.
        $this->project->add("PartC","BuildB_PratC");
    }

    public function getProject()
    {
        // TODO: Implement getProject() method.
        return $this->project;
    }

}