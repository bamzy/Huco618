<?php
require_once('autoload.php');
/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/1/2016
 * Time: 2:06 PM
 */
$mySQLi = DBConn::getConnection();
$mySQLi1 = DBConn::getConnection();
$mySQLi2 = new MySQLi('localhost','root','salam', 'aghilidedb');
//var_dump($mySQLi1);
//var_dump($mySQLi);
//var_dump($mySQLi2);
if ($mySQLi === $mySQLi2 ) echo "they are simillar";

//$person = new EvolvedPerson();
//$person->first = 'bamdad';
//$person->last  = 'de';
//
//var_dump($person->fields);


?>