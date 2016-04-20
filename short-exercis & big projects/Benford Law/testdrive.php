<?php
/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/3/2016
 * Time: 9:02 PM
 */

    include_once ('./autoload.php');
    $benfordValidator = new Benford();
    $benfordValidator->verify([11111232,3231,3423423423,34364566467,6978654534,3453453453,856756757,24523423423,25235235,3643634663]);

?>