<?php

require '../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

$object1 = new Hello();

//var_dump(talk);

echo $object1->talk();

$objet2 = new SayHello();

echo $objet2->world();


