<?php
/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/3/2016
 * Time: 9:02 PM
 */

    include_once ('./autoload.php');
    $sqlCleaner = new SqlDataCleaner('task');
    var_dump($sqlCleaner->makeClean([1,"'2",'3','4','5',6,7,'yess']));
?>