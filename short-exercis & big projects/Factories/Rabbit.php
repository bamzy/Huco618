<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/3/2016
 * Time: 8:54 PM
 */
include_once ('./Animal.php');
class Rabbit extends Animal
{

    public function __construct($name,$maxFoodCapacity)
    {
        $this->type = 'Rabbit';
        parent::__construct($name,$maxFoodCapacity);
    }




}


?>