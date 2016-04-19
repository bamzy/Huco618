<?php

/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 19/04/2016
 * Time: 1:26 PM
 */
include_once ('./Animal.php');
class Zookeeper implements Iterator, Countable
{
    private $position;
    protected $animals = array();
    public function __construct()
    {
        $this->position = 0;
    }


    public function takeCareOf(Animal $animal){
        $this->animals[] = $animal;
    }
    public function feedTheAnimals(){
        foreach ($this->animals as $value) {
            $value->eat();
        }

    }

    public function soundOff(){
        foreach ($this->animals as $value) {
            $value->speak();
        }

    }



    public function current()
    {
        return $this->animals[$this->position];
    }

    public function next()
    {
        ++$this->position;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        return isset($this->animals[$this->position]);
    }


    public function rewind()
    {
        $this->position = 0;
    }
    public function test(){
        echo "This is just a test to make sure I am running the right instance of zookeeper";
    }


    public function count()
    {
        return sizeof($this->animals);
    }
}