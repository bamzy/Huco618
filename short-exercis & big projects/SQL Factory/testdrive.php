<?php
/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/3/2016
 * Time: 9:02 PM
 */

    include_once ('./autoload.php');
    $sqlCleaner = new SqlFactory('task');
    var_dump($sqlCleaner->getInsertQuery(array('id' => 1,'name' => 'mytask', 'description' => 'no description', 'creationDate' => '2016-04-11 20:25:34', 'dueDate' => '2016-04-11 20:25:34', 'priority'=>1, 'type' => 3 ,'stat' => 'yes')));
    var_dump($sqlCleaner->getUpdateQuery(array('id' => 1,'name' => 'mytask', 'description' => 'no description', 'creationDate' => '2016-04-11 20:25:34', 'dueDate' => '2016-04-11 20:25:34', 'priority'=>1, 'type' => 3 ,'stat' => 'yes')));
?>