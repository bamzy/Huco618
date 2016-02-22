<?php
/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/3/2016
 * Time: 9:02 PM
 */
    include_once('Rabbit.php');
    include_once('OneDie.php');
    $bunbun = new Rabbit('bunbun');
    $bunbun->speak();
    $bunbun->eat(30);
    $bunbun->eat(30);

    $die = new OneDie(8);
    echo $die->roll() ;





?>