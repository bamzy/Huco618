<?php
/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 1/18/2016
 * Time: 4:36 PM
 */
    function __autoload($className){
        include_once($className. '.php');
    }
?>