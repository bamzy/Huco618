<?php
/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/3/2016
 * Time: 9:02 PM
 */

    include_once('./autoload.php');
    $bunbun = new Rabbit('bunbun');
    echo 'the name is '.    $bunbun->name ."\n";
    $bunbun->name = 'bunnybunny';
    echo 'the name is '.    $bunbun->name ."\n";





///_toString()
    $die = new MyDie(8);
    $die->roll();
    echo $die ;





?>