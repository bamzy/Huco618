<?php

/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 19/04/2016
 * Time: 4:45 PM
 */
include_once ('./autoload.php');
class ZooNursery
{
    public function getAnimal($name){
        if ($name == 'Horse')
            return new Horse('HR'.mt_rand(1, 1000) , mt_rand(1, 1000));
        elseif ($name == 'Rabbit')
            return new Rabbit('RB'.mt_rand(1, 1000) , mt_rand(1, 1000));
        elseif ($name == 'Goldfish')
            return new Goldfish('GF'.mt_rand(1, 1000) , mt_rand(1, 1000));
        elseif ($name == 'Lion')
            return new Lion('LN'.mt_rand(1, 1000) , mt_rand(1, 1000));

    }

}