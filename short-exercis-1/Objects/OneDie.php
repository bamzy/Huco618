<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/4/2016
 * Time: 8:06 PM
 */
class OneDie
{
    private $sideNumber;
    public function roll(){
//        return random_int(1,$this->sideNumber);
        return 'You have rolled a '.mt_rand(1,$this->sideNumber) . "\n";
    }
    public function __construct($sideNumber)
    {
        $this->sideNumber = $sideNumber;

    }
}
?>