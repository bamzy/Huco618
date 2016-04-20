<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/4/2016
 * Time: 8:06 PM
 */
include_once ('./MyDie.php');
class SecondSichermanDice extends MyDie
{
    private $sides = array(1,3,4,5,6,8);
    public function __construct()
    {
        parent::__construct(6);

    }
    public function roll(){
        return parent::roll();
//        echo $this->sides[$res];
    }

}
?>