<?php

/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 19/04/2016
 * Time: 4:10 PM
 */
include_once ('./Bottle.php');
include_once ('./CheatBottle.php');
include_once ('./ChampagneBottle.php');
class LiqourStore
{
    public function getChampagne(){
        return new ChampagneBottle();

    }
    public function getCheat(){
        return new CheatBottle();

    }
    public function getBottle(){
        return new Bottle();
    }
    public function getSomeBottle(){
        $randValue = mt_rand(1, 3) ;
        if ($randValue == 1)
            return new CheatBottle();
        if ($randValue == 2)
            return new ChampagneBottle();
        if ($randValue == 3)
            return new Bottle();

    }


}