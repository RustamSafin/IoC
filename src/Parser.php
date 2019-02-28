<?php


require_once 'Container.php';
require_once 'Buka.php';
require_once 'Baka.php';
require_once 'Vika.php';

class Parser
{
    public static function read ($file) {
        $json = file_get_contents($file);
        return json_decode($json);
    }
}