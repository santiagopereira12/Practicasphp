<?php
$integrantes = array(
    array(
        "nombre" => "Cielo",
        "ocupación" => "Cajera",
        "edad" => "54",
        "comida" => array("favorita"=>"sopa", "noFavoritas"=>"cubios")
    ),
    array(
        "nombre" => "Humberto",
        "ocupación" => "ing.Electronico",
        "edad" => "53",
        "comida" => array("favorita"=>"frijole", "noFavoritas"=>"suero")
    ),
    array(
        "nombre" => "Emmanuel",
        "ocupación" => "Mesero",
        "edad" => "22",
        "comida" => array("favorita"=>"pescado", "noFavoritas"=>"rabiolis")
    ),
    array(
        "nombre" => "Santiago",
        "ocupación" => "Desarrollador",
        "edad" => "20",
        "comida" => array("favorita"=>"arroz con pollo", "noFavoritas"=>"lentejas")
    ),
);
$persona = $integrantes[0];
echo "la persona: " .$integrantes[0]['nombre']. " le gusta la comida: " .$persona['comida']['favorita'];
?>