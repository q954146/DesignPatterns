<?php
/**
 * Created by PhpStorm.
 * User: zimo
 * Date: 2016/12/14
 * Time: 13:27
 */

namespace Builder;


class Project
{
    public $dates;
    public function add($key,$value){
        $this->dates[$key] = $value;
    }

    public function show(){
        foreach ($this->dates as $date){
            echo $date;
            echo "<br>";
        }
    }
}