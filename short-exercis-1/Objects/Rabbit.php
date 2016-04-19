<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/3/2016
 * Time: 8:54 PM
 */
class Rabbit
{
    const MAXIMUM_FOOD_AMOUNT = 50;
    private $name;
    private $foodLimit;
    private $foodReceived;
    public function __construct($name)
    {
        $this->name = $name;
        $this->foodLimit = self::MAXIMUM_FOOD_AMOUNT;
    }

    public function makeSound() {
        echo "ffufufffu";
    }
    public function speak() {
        echo "I am a class of type " . __CLASS__ . " and my name is {$this->name}. \n";
    }
    public function eat($foodAmount) {
        if ($foodAmount + $this->foodReceived > $this->foodLimit )
            echo "NO, I AM FULL :(\n";
        else {
            $this->foodReceived = $this->foodLimit + $foodAmount;
            echo "NUMMM NUMMM NUMMM :) \n";
        }


    }
    public function isHungry(){
        if ($this->foodLimit>$this->foodReceived) return true; else return false;
    }



}


?>