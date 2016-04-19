<?php

/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 19/04/2016
 * Time: 2:50 PM
 */
include_once ('./autoload.php');
class Drinker
{
    private  $bottle;
    public function __construct()
    {
        $this->bottle = new Bottle();
    }
    public function drink(){
        if (!$this->bottle->pour()) {
            echo "Bottle Is Empty! \n";
            if (mt_rand(1, 2) == 1)
                $this->bottle = new CheatBottle();
            else
                $this->bottle = new ChampagneBottle();
        }
        else {
            echo "Oh I am Drinking Alright\n";
            if (mt_rand(1, 10) < 4)
                $this->burp();
        }
    }
    private function burp(){
        echo "BURPPPPPP!!\n";

    }

}

?>