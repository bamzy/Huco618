<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/4/2016
 * Time: 8:42 PM
 */
include_once("./Animal.php");
class Fish extends Animal
{
    public function __construct($name)
    {

        $this->name = $name;
        $this->foodLimit = self::MAXIMUM_FOOD_AMOUNT;
    }

    public function swim(){
        echo "I am swimming \n";
    }

}

?>