<?php
/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/3/2016
 * Time: 9:02 PM
 */

    include_once('./autoload.php');
//ZooKeeper

    $animal1  = new Rabbit('bunbun');
    $animal2 = new Fish('nemo');
    $zookeeper = new Zookeeper();
    $zookeeper->takeCareOf($animal1);
    $zookeeper->takeCareOf($animal2);
    $zookeeper->feedTheAnimals();
    $zookeeper->soundOff();


//Dice
    $diceTrhow = new DiceThrow();
    $count = array(0,0,0,0,0,0,0,0,0,0,0,0,0);
    for ($x = 1; $x <= 1000; $x++) {
        $res = $diceTrhow->throww();
        $count[$res]++;
    }
echo "Result for Normal Dice\n";
    for ($x = 2; $x <= 12; $x++) {
        print_r ('sum=' . $x . ' , count='. $count[$x] . "\n");
    }

echo "Result for Sicherman Dice\n";
$sichermanDiceTrhow = new SichermanDiceThrow();
    $count = array(0,0,0,0,0,0,0,0,0,0,0,0,0);
    for ($x = 1; $x <= 1000; $x++) {
    $res = $sichermanDiceTrhow->throww();
    $count[$res]++;
}
for ($x = 2; $x <= 12; $x++) {
    print_r (' sum=' . $x . ' , count='. $count[$x] . "\n");

}
//Bottle

    $drinker = new Drinker();
    $drinker->drink();
    $drinker->drink();
    $drinker->drink();
    $drinker->drink();
    $drinker->drink();
    $drinker->drink();
?>