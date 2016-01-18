<?php
/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 1/18/2016
 * Time: 2:22 PM
 */
    include_once 'Submarine.php';
    include_once 'Ship.php';
    $submarine = new Submarine("First Ship");
    $submarine->fire();
    $submarine->fire();
    $submarine->fire();
    $submarine->fire();

    $var1 = 4;
    $var2 = $var1;
    $var2++;
    var_dump($var2);

?>