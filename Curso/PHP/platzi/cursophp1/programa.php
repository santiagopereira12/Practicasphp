<?php
// función "readline" sirve para tomar datos y guardarlos en una variable.
$segundos = readline("Ingresa el tiempo en segundos: ");
echo "los segundos digitados son: ".$segundos."\n";

$horas = (int) ($segundos/3600);
$seg_Rest_H = (int) ($segundos % 3600);
$minutos = (int) ($seg_Rest_H/60);
$seg_Restantes = (int) ($seg_Rest_H % 60);

echo "Horas: " .$horas. " con " .$minutos. " minutos y " .$seg_Restantes. " segundos";
?>