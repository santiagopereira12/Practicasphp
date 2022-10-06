<?php
$frutas = array("1"=>"fresa", "2"=>"uva", "3"=>"manzana", "4"=>"pera", "5"=>"naranja");
print_r($frutas); echo "<br>";
echo $frutas['2']."<br>";
for($id = 1; $id < 6; $id++){
    echo $frutas[$id]."<br>";
}

$nombres = array("Santiago", "Nicolas", "Cristian", "Andres", "Brandon", "Manuel");
echo "<br>"; print_r($nombres);
echo "<br>".$nombres[4]."<br>";
for($indice = 0; $indice < 6; $indice++){
    echo $nombres[$indice]."<br>";
}

$comidas = array("A"=>"pizza", "B"=>"hotdog", "C"=>"Hamburguesa", "D"=>"arepa");
foreach($comidas as $ind => $valor){
    echo "<br>".$ind.") ".$valor."<br>";
    echo $comidas[$ind]; //con respecto a lo nombrado en los indices se van a imprimir los valores
}
?>