<?php

namespace App;
require 'vendor/autoload.php';

$object = new MagicClass();
$object->method();
MagicClass::staticMethod();
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

$T1 = new Point(4, 12);
$V1 = new Vector(4, 8);
$V2 = new Vector(0, 0);
$V3 = new Vector(8, -4);
echo "T1 = $T1, V1 = $V1, V2 = $V3", PHP_EOL;
echo $V1->length(), PHP_EOL;
echo $V1->isPerpendicularTo($V3) ? 'true' : 'false', PHP_EOL;
echo $V2->isZero() ? 'true' : 'false', PHP_EOL;
$T1->move($V1->x, $V1->y);
echo $T1, PHP_EOL;


