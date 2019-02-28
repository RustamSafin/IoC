<?php


require "Properties.php";

class Person
{
    use Properties;

    public function __construct($first, $last) {
        $this->properties['firstname'] = $first;
        $this->properties['lastname'] = $last;
    }
    public function get_fullname() {
        echo "Get fullname\n";
        return $this->firstname.' '.$this->lastname;
    }
    public function get_firstname() {
        echo "Get firstname\n";
        return 'F:'.$this->properties['firstname'];
    }
}