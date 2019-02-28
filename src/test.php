<?php

require_once 'Container.php';
require_once 'Buka.php';
require_once 'Baka.php';
require_once 'Vika.php';
require_once 'Parser.php';

$container = new Container();

$info= Parser::read('test.json');

foreach ($info as $data) {
    $container[$data->className] = new $data->className;

    if (!empty($data->dependencies)) {
        foreach ($data->dependencies as $dependency) {
            $container[$data->className]->$dependency = $container[$dependency];
            var_dump($container[$data->className]->$dependency);
        }
    }
}
var_dump( $container["Buka"]->Baka->Vika);