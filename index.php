<?php

require 'vendor/autoload.php';

$object = new \App\MagicClass();
$object->method();
\App\MagicClass::staticMethod();
$a = $object->variable;
$object->variable = 12;
isset($object->variable);
unset($object->variable);
$str = serialize($object);
$object2 = unserialize($str);
strval($object);
$object(12);
var_export($object);
$object3 = clone $object;
var_dump($object);