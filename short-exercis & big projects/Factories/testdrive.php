<?php
/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/3/2016
 * Time: 9:02 PM
 */

include_once('./autoload.php');
//Bottle Store
$bottleStore = new LiqourStore();
$bottle = $bottleStore->getBottle();
echo "We've got a " . get_class($bottle) . "\n";
$bottle = $bottleStore->getChampagne();
echo "We've got a " . get_class($bottle) . "\n";
$bottle = $bottleStore->getCheat();
echo "We've got a " . get_class($bottle) . "\n";
$bottle = $bottleStore->getSomeBottle();
echo "We've got a " . get_class($bottle) . "\n";


//Zoo Nursery

    $nursery = new ZooNursery();
    $animal = $nursery->getAnimal('Horse');
    echo "This is a " . get_class($animal) ." called: " . $animal->name . "\n";



?>