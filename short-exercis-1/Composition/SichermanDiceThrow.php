<?php

/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 19/04/2016
 * Time: 2:27 PM
 */
include_once ('./DiceThrow.php');
class SichermanDiceThrow extends DiceThrow
{
    public function __construct()
    {
        $this->die1= new FirstSichermanDice();
        $this->die2 = new SecondSichermanDice();
    }

}