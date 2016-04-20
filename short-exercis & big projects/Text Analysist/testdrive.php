<?php
/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/3/2016
 * Time: 9:02 PM
 */

    include_once('./autoload.php');
    $analyzer = new Analyzer("http://www.gutenberg.org/files/31205/31205-h/31205-h.htm");
    //enter your stopwords as input to this function so they won't be counted in frequency
    $analyzer->getSummary(['the','of']);

    return 0;

?>