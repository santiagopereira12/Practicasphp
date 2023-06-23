<?php

//Por procedimientos - estructurada - funciones.
/*$interval = date_interval_create_from_date_string("5 days");
$date = date_create();
date_add($date, $interval);

echo date_format($date, "Y-m-d");*/

//POO.
$intervalo = DateInterval::createFromDateString("5 days");
$date_poo = new DateTime();
$date_poo->add($intervalo);
echo $date_poo->format("Y-m-d");

?>