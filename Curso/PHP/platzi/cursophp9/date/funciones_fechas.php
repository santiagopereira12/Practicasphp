<?php

//Establecer zona horaria.
date_default_timezone_set("America/Mexico_City");

//Obtener fecha actual.
$now = date("Y-m-d H:i:s");
echo $now;

//Strtotime
echo strtotime($now);

?>