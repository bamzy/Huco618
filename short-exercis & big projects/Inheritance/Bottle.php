<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 2/4/2016
 * Time: 8:16 PM
 */
class Bottle
{

    protected $content ;
    const overflowAmountPercentage = 15/100;
    const overflowChancePercentage = 10;
    const reducedAmountEachPour = 5;
    protected function setContent($input){
        $this->content = $input;
    }
    public function getContent(){
        return $this->content;
    }
    public function __construct($input =100)
    {
        $this->content = $input;
    }

    public function pour()
    {
        if ($this->content > 0) {


            if (mt_rand(1,self::overflowChancePercentage) == 10   )
                $this->overflow();
            else $this->content = $this->content - self::reducedAmountEachPour ;
            return true;
        }
        else return false;
    }

    public function overflow(){
        $amount = $this->content * self::overflowAmountPercentage;
        $this->content -= $amount;
        echo 'Ooops Foamy Overflow! of ' . $amount . "\n";
    }
    public function __destruct()
    {
        echo 'SMASH!';
    }

}
?>