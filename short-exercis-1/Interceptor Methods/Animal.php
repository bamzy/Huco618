<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/4/2016
 * Time: 8:37 PM
 */
class Animal
{
    const MAXIMUM_FOOD_AMOUNT = 50;
    protected $name;
    protected $type;
    protected $eatenFood;

    protected $foodLimit;
//    private $foodReceived;
    public function makeSound(){
        echo $this->name ." Is an animal\n";
    }
    public function eat(){
        echo $this->name . " Is  eating \n";
        $this->eatenFood++;

    }
    public function speak() {
        echo "I am a class of type " . __CLASS__ . " and my name is {$this->name}. \n";
    }

    public function isHungry(){
        if ($this->foodLimit>$this->eatenFood) return true; else return false;
    }
    public function getName(){
        return $this->name;
    }
    protected function setName($input){
        $this->name = $input;
    }


}
?>