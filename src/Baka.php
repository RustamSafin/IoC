<?php


class Baka {
    private $Vika;
    public function __construct($text)
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
        return "NSDP";
    }
}
