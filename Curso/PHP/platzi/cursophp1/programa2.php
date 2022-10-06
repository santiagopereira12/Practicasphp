<?php
$horas = readline("ingrese el numero de horas: ");
$minutos = readline("ingrese el numero de minutos: ");

$seg_horas = $horas*3600;
$seg_minutos = $minutos*60;
$seg_totales = $seg_horas + $seg_minutos;

echo "dadas las horas: " .$horas. " y los minutos: " .$minutos. ", equivalen a: " .$seg_totales. " segundos";
?>