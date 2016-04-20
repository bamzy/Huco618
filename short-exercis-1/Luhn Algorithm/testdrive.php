<?php
/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/3/2016
 * Time: 9:02 PM
 */

    include_once('./autoload.php');
    $luhn = new Luhn();
    $luhn->validate(79927398713);
    echo $luhn->luhanize(79927398714);
?>