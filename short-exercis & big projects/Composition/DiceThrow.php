<?php

/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 19/04/2016
 * Time: 1:58 PM
 */
class DiceThrow {
    protected $die1,$die2;
    public function __construct()
    {
        $this->die1= new MyDie(6);
        $this->die2 = new MyDie(6);
    }
    public function throww() {
        return $this->die1->roll() + $this->die2->roll();
    }



}


?>