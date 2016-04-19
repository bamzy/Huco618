<?php
/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/3/2016
 * Time: 9:02 PM
 */

    include_once('./autoload.php');
    $bunbun = new Rabbit('bunbun');
    $bunbun->speak();
    $bunbun->eat(30);
    $bunbun->eat(30);



///Dice
    $die = new MyDie(8);
    echo "simple die roll: " .$die->roll() ."\n";

    $no1 = new FirstSichermanDice();
    echo "no1 roll: ". $no1->roll(). "\n";
    $no2 = new SecondSichermanDice();
    echo "no2 roll: ". $no2->roll() . "\n";

//Bottles
    $bottle1 = new ChampagneBottle();
    $bottle1->pour();


    $bottle2 = new CheatBottle();
    $bottle2->pour();
    $bottle2->pour();
    $bottle2->pour();

?>