<?php
/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 1/18/2016
 * Time: 4:36 PM
 */
    function __autoload($className){
//        echo "I am auto loading {$className} \n";
        include_once($className. '.php');
    }
?>