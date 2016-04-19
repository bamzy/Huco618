<?php

/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 19/04/2016
 * Time: 1:26 PM
 */
include_once ('./Animal.php');
class Zookeeper
{
    protected $animals = array();

    public function takeCareOf(Animal $animal){
        $this->animals[] = $animal;
    }
    public function feedTheAnimals(){
        foreach ($this->animals as $value) {
            $value->eat();
        }

    }

    public function soundOff(){
        foreach ($this->animals as $value) {
            $value->speak();
        }

    }


}