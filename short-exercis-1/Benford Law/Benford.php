<?php

/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 20/04/2016
 * Time: 1:27 PM
 */
class Benford
{
    private $proximationInPercent = 10;
    private $benfordFrequency = array('1' => 30.1, '2' => 17.6, '3' => 12.5, '4' => 9.7 , '5' => 7.9 , '6' => 6.7 , '7' => 5.8 , '8' => 5.1 , '9' => 4.6);
    public function verify($input){
        $size = sizeof($input);
        $count = [0,0,0,0,0,0,0,0,0,0];
        for ($i=0;$i<sizeof($input);$i++){
            $digit  = floor($input[$i]/ (10 ** (strlen($input[$i])-1)));
            $count[$digit]++;
        }
        for ($i=1;$i<=sizeof($input);$i++){
            $count[$i]= $count[$i]/$size*100;
            if (abs($this->benfordFrequency[$i] - $count[$i]) > $this->proximationInPercent)
                return false;

        }
        return ture;
    }

}



?>