<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/4/2016
 * Time: 8:06 PM
 */
include_once ('./MyDie.php');
class D20 extends MyDie
{

    public function __construct()
    {
        parent::__construct(20);

    }
    public function roll(){
        $res =parent::roll();
        if ($res == 1)
            echo 'Automatic Miss';
        else
            echo 'Automatic Hit';
    }

}
?>