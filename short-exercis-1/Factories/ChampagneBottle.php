<?php

/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 19/04/2016
 * Time: 12:33 PM
 */
include_once ('./Bottle.php');
class ChampagneBottle extends Bottle
{
    public function __construct()
    {

        parent::__construct(150);
    }
    public function pour()
    {
        if ($this->content > 0) {


            if (mt_rand(1,self::overflowChancePercentage) >2    )
                $this->overflow();
            else $this->content = $this->content - self::reducedAmountEachPour ;
            return true;
        }
        else return false;
    }

}