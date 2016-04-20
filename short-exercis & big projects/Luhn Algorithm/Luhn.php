<?php

/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 20/04/2016
 * Time: 2:14 PM
 */
class Luhn
{


    public function validate($input){
        $sum = 0;
        $input = $input . "";
        for ($i=strlen($input)-1;$i>=0;$i--){
            $digit = $input[$i] + 0;
            if ($i % 2 == 1){
                $temp = 2* $digit;
                if ($temp > 9){
                    $sum = $sum + $temp%10 + floor($temp/10);
                }else
                    $sum = $sum +$temp;
            }else
                $sum = $sum + $digit;


        }
        if ($sum % 10 == 0)
            return true;
        else return false;

    }
    public function luhanize($input){
        $sum = 0;
        $origInput = $input;
        $input = $input . "";
        for ($i=strlen($input)-1;$i>=0;$i--){
            $digit = $input[$i] + 0;
            if ($i % 2 == 1){
                $temp = 2* $digit;
                if ($temp > 9){
                    $sum = $sum + $temp%10 + floor($temp/10);
                }else
                    $sum = $sum +$temp;
            }else
                $sum = $sum + $digit;


        }
        if ($sum % 10 == 0)
            return $origInput;
        else return $origInput . (10-($sum%10));


    }

}


?>