<?php
//phpinfo();
require_once('autoload.php');
/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/1/2016
 * Time: 2:06 PM
 */
if (isset($_POST['submit'])) {
    $person = new EvolvedPerson($_POST['id']);
    $person->loadFromHtmlForm();
    $person->saveDataToDB();
}
if (array_key_exists('id',$_GET))
    $person = new EvolvedPerson($_GET['id']);
else
    $person = new EvolvedPerson();
//$person->first = 'bamdad';
//$person->last  = 'de';
//$person->createFieldList();
$person->loadDataFromDB();
//$person->fields['first']= 'Bamdad';
//$person->fields['last']= 'A';
//$person->fields['email']= 'bamdad.ag@gmail.com';
//$person->fields['phone']= '780-332-3243';
$person->displayAsHTML();
//$person->saveDataToDB();
//$person->createUpdateValueList()

//var_dump($person->fields);


?>