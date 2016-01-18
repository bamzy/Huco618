<?php

/**
 * Created by PhpStorm.
 * User: bamdad
 * Date: 1/18/2016
 * Time: 2:13 PM
 */
class Ship
{
    protected $name;
    protected $ammo=10;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * Ship constructor.
     * @param $name
     */
    public function __construct($name = "I am not named after anything")
    {
        //echo "Ship contructor was called";
        $this->name = $name;
    }
    public function report(){
        echo "This is  {$this->name} \n";
    }
    public function fire()
    {
        $this->report();
        if ($this->ammo > 0) {
            $this->ammo--;
            echo "I fired just now, I have {$this->ammo} bullet left \n";
        } else
            echo "No ammo left";
    }
}