<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/3/2016
 * Time: 8:54 PM
 */
include_once ('animal.php');
class Rabbit extends Animal
{

    public function __construct($name)
    {
        $this->name = $name;
        $this->foodLimit = self::MAXIMUM_FOOD_AMOUNT;
    }




}


?>