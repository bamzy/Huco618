<?php
//phpinfo();
require_once('autoload.php');
/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/1/2016
 * Time: 2:06 PM
 */

$sighting = new Sighting(5);
$sighting->loadDataFromDB();
$sighting->displayAsHTML();



?>