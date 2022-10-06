<?php
//Es la forma en la que obligamos a un dato a convertirse en otro tipo de dato.
$numero_letra = "255";
$numero = (int) $numero_letra;

var_dump($numero_letra);
var_dump($numero);

$validacion = 1;
$validar = (bool) $validacion;
var_dump($validacion);
var_dump($validar);
?>