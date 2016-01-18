<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 1/18/2016
 * Time: 2:17 PM
 */
    include_once "Ship.php";
class Submarine extends Ship
{
    public function fire()
    {
        echo "I will not fire because I am a submarine! \n";
    }

}