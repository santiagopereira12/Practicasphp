<?php

require ("Classes/Michis_disponibles/michi.php");
require ("Classes/Michis_apartados/michi_aprt.php");

use MichiDisponibles\Michi;
use MichiApartado\Michis_aprt as apartados;

$gatico = new Michi("Mailo", "Mono", 5);
$gato = new Michi("Onix", "negro", 7);
$cat = new Michi("Mono", "Amarillo", 6);

$reserva = new apartados("Blanca", new DateTime("2023-05-16"), "Emmanuel");
$apartad = new apartados("Tommy", new DateTime("2023-02-14"), "Michelle");
$adopte = new apartados("Venus", new DateTime("2023-06-18"), "Santiago");

?>