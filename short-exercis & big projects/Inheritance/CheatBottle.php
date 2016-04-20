<?php

/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 19/04/2016
 * Time: 12:33 PM
 */
include_once ('./Bottle.php');
class CheatBottle extends Bottle
{
    public function __construct()
    {

        parent::__construct(90);
    }
    public function pour()
    {
        if ($this->content > 0) {




            $this->content = $this->content - mt_rand(1,5)/100 * $this->getContent() - self::reducedAmountEachPour;
            echo 'CheatBottle Poured the remaining is ' . self::getContent() . "\n";
            return true;
        }
        else return false;
    }

}