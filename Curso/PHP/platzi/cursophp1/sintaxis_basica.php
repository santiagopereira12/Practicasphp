<?php
$nombre = "Santiago ";
$apellido = "Pereira";

echo "Hola, yo me llamo " . $nombre . $apellido . "\n"; //concatenación normal.
echo "Hola yo me llamo $nombre $apellido \n"; //forma de concatenación más sencilla solo funciona en comillas dobles
//Operaciones matematicas sencillas dentro de un comentario.
echo "El resultado de 7x8 es " . (7*8) . "\n";

$personas = [
    "Santiago" => 20,
    "Cristian" => 19,
    "Jony" => 25
];
//var_dump($personas);
print_r($personas);
?>