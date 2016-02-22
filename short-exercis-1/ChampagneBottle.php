<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/4/2016
 * Time: 8:48 PM
 */
class ChampagneBottle extends Bottle
{
    public function __construct()
    {

        $this->capacity = 45;
    }

    public function pour()
    {
        if ($this->content > 0) {

            $this->pourCount++;
            if (mt_rand(1,10) > 2   )
                $this->content=$this->content - $this->content*15/100;
            else $this->content--;
            return true;
        }
        else return false;
    }



}