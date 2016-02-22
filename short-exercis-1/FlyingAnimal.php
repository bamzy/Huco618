<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/4/2016
 * Time: 8:39 PM
 */
include_once("Animal.php");
class FlyingAnimal extends Animal
{
    public function fly()
    {
        echo "I am flying \n";
    }

}

?>