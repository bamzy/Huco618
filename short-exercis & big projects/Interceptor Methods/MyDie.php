<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/4/2016
 * Time: 8:06 PM
 */
class MyDie
{
    private $latestValue;
    private $sideNumber;
    public function roll(){
//        return random_int(1,$this->sideNumber);
        $this->latestValue = mt_rand(1,$this->sideNumber);
        return $this->latestValue;
    }
    public function __construct($sideNumber)
    {
        $this->sideNumber = $sideNumber;

    }
    public function getLatestValue(){
        return $this->latestValue;
    }
    public function __toString()
    {
        return 'My latest value was: ' . $this->latestValue . "\n";
    }
}
?>