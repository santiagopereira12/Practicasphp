<?php
require("vendor/autoload.php");

use App\Classes\Gato;
use App\Classes\Perro;

$Tommy = new Perro();
$Onyx = new Gato();

echo $Tommy->Play()."\n";
echo $Tommy->Happy();

?>