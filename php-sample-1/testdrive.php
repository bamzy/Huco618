<?php
/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 1/18/2016
 * Time: 2:22 PM
 */
    require_once("autoload.php");
    $submarine = new Submarine("First Ship");
    $submarine->fire();
    $submarine->fire();
    $submarine->fire();
    $submarine->fire();

    $var1 = 4;
    $var2 = $var1;
    $var2++;
    var_dump($var2);


    $myNavy = new Navy();
    $myNavy->addToMyList(new Submarine("sub1"));
    $myNavy->addToMyList(new Submarine("sub2"));
    $myNavy->addToMyList(new Ship("ship3"));
    $myNavy->addToMyList(new Ship("ship"));

    $myNavy->callALL();

?>