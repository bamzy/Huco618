<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/4/2016
 * Time: 8:06 PM
 */
include_once ('./MyDie.php');
class CanadianDie extends MyDie
{
    private $sides = array('Ontario','Quebec','Nova Scotia','New Brunswick', 'Manitoba','British Columbia', 'Prince Edward Island','Saskatchewen','Alberta','Newfoundland and Labrador');
    public function __construct()
    {
        parent::__construct(13);

    }
    public function roll(){
        return parent::roll();
//        echo $this->sides[$res];
    }

}
?>