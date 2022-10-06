<?php
$edades = [20, 22, 53, 54];
echo count($edades)."\n";
array_push($edades, 19);
var_dump($edades);

$falso_arreglo = "";
var_dump(is_array($falso_arreglo));
var_dump(is_array($edades));

//explode
$frutas = "fresa,manzana,banana,naranja";
$array_frutas = explode(",", $frutas);
var_dump($array_frutas);

//implode
$comida = ["arroz", "pollo", "carne", "papa"];
$almuerzo = implode(",", $comida);
var_dump($almuerzo);
echo "\n".$almuerzo;
?>