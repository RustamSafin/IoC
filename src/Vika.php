<?php


class Vika
{
    private $text;
    public function __construct($text)
    {
        $this->text=$text;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function setText($text){
        $this->text=$text;
    }


    public function getText(){
        return $this->text;
    }

}