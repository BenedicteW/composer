<?php 

require '../vendor/autoload.php';

$objet1 = new App\Wcs\Hello();
$objet2 = new HelloWorld\SayHello();

echo $objet1->talk();
echo $objet2->world();