<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 1/18/2016
 * Time: 4:20 PM
 */
class Navy
{
    private $mylist = array();

    /**
     * @param array $mylist
     */
    public function addToMyList(Ship $ship)
    {
        $this->mylist[] = $ship;
    }
    public function callALL(){
        foreach ( $this->mylist as $item){
            $item->report();
        }
    }

}