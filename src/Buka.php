<?php

require_once 'First.php';

class Buka implements First
{
    private $Vika;
    private $Buka;

    public function __construct($text="DEF")
    {
        $this->text=$text;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
    public function __get($name)
    {
        return $this->$name;
    }


    public function first() {
        return "gb;sldef";
    }
}