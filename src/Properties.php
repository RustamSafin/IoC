<?php


trait Properties
{
    protected $properties;

    public function __get($name)
    {
        return $this->name;
    }
    public function __set($name, $value)
    {
        if (method_exists($this, ($method = 'set_'.$name)))
        {
            $this->$method($value);
        }
    }

}