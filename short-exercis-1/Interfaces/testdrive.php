<?php
/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/3/2016
 * Time: 9:02 PM
 */

    include_once('./autoload.php');
//Animals

    $animal1  = new Rabbit('bunbun');
    $animal2 = new Fish('nemo');
    $zookeeper = new Zookeeper();
    $zookeeper->takeCareOf($animal1);
    $zookeeper->takeCareOf($animal2);


    echo "This zoo is taking care of " . sizeof($zookeeper) . " animals \n";
//    $zookeeper->feedTheAnimals();
//    $zookeeper->soundOff();
//    $zookeeper->test();
    $hungryCount = 0;
    $fullCount = 0;
    foreach($zookeeper as $key => $value) {
        if ($value->isHungry())
            $hungryCount++;
        else
            $fullCount++;
    }
        echo "Hungry: #". $hungryCount . " and Full:#". $fullCount . "\n";


    foreach($zookeeper as $key => $value) {
        echo $value->name . " is a " . get_class($value) . " who is ";
        if ($value->isHungry())
            echo "Hungry\n";
        else
            echo "Not Hungry\n";
    }


?>