<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/4/2016
 * Time: 8:16 PM
 */
class Bottle
{
    protected $content;
    protected $capacity;
    public function __construct()
    {
        $this->capacity = 30;
    }

    public function pour()
    {
        if ($this->content > 0) {


            if (mt_rand(1,10) == 10   )
                $this->content=$this->content - $this->content*15/100;
            else $this->content--;
            return true;
        }
        else return false;
    }

}
?>