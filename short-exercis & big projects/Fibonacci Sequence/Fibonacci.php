<?php

/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 19/04/2016
 * Time: 5:04 PM
 */
class Fibonacci
{
    public function sequence($num){
        $first = 1;
        $second = 1;
        $sum = 0;
        for ($i=1;$i<=$num+1;$i++) {
            if ($i > 1) {

                echo $sum . '  ';
            }
                $first = $second;
                $second = $sum;
                $sum = $second + $first;

        }


    }

}