<?php
#impresión(conociendo sintaxis).
echo "<h1>Inicio de curso php</h1>";
echo "<hr><br>";

#Variables.
$numero = 8;
echo "Aqui podemos notar como se realiza la impresión de una variable numerica: $numero<br>";
$texto = "todo esto es para aprender a tirar codigo una chimba nea<br>";
echo $texto;
#variable booleana
$registro = true;
echo "esta variable pertenece a los registros booleanos: $registro<br>";
#Array
$colores = ["Amarillo", "Azul", "Rojo"];
echo $colores[0];
foreach($colores as $colors){
    echo "<li>".$colors."</li>";
}
echo "<br>";
#propiedades de los array
$celulares = ["celular1"=>"Samsung", "celular2"=>"Xiaomi", "celular3"=>"oppo", "celular4"=>"iphone"];
echo $celulares["celular2"];
foreach($celulares as $marca){
    echo"<li>".$marca."</li>";
}
echo "<br>";
#variable objetos
$frutas = (object)["fruta1"=>"Fresa","fruta2"=>"Manzana","fruta3"=>"Mora"];
echo $frutas->fruta1;
foreach($frutas as $jugos){
    echo "<li>".$jugos."</li>";
}
echo "<br>";

#VAR_DUMP.
var_dump($numero);
echo "<br>";
var_dump($texto);
echo "<br>";
var_dump($registro);
echo "<br>";
var_dump($colores);
echo "<br>";
var_dump($celulares);
echo "<br>";
var_dump($frutas);
?>