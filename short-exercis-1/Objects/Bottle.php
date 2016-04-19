<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/4/2016
 * Time: 8:16 PM
 */
class Bottle
{

    private $capacity ;
    const overflowAmountPercentage = 15/100;
    const overflowChancePercentage = 10;
    const reducedAmountEachPour = 5;
    public function __construct()
    {
        $this->capacity = 100;
    }

    public function pour()
    {
        if ($this->capacity > 0) {


            if (mt_rand(1,self::overflowChancePercentage) == 10   )
                $this->overflow();
            else $this->content = $this->capacity - self::reducedAmountEachPour ;
            return true;
        }
        else return false;
    }

    public function overflow(){
        $this->capacity -= $this->capacity * self::overflowAmountPercentage;
        echo 'Foamy Overflow!';
    }

}
?>