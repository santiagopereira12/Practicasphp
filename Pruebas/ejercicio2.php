<?php
echo "<h1>Funciones</h1>";
#Funciones(sin parametros)
function saludo(){
    echo "Hola Mundo";
}
saludo();
echo "<br>";

#(sin parametro)
function despedida($chao){
    echo $chao;
}
despedida("Adios Mundo");
echo "<br>";

#(con retorno)
function retorno($retornar){
    return $retornar;
}
echo retorno("retornando");
echo "<hr>";

echo "<h1>Condicionales y Ciclos</h1>";
echo "<h2>Condicionales</h2>";
#Condicionales.
$mateo = 20;
$brandon = 26;

if($mateo > $brandon){
    echo "Mateo es mayor que Brandon";
}else if($mateo == $brandon){
    echo "Mateo y Brandon tienen la misma edad";
}else{
    echo "Mateo es menor que Brandon";
}
echo "<br>";

//conicional Switch
$dia = "viernes";

switch($dia){
    case 'lunes':
        echo "hay que trabajar";
        break;
    case 'miercoles':
        echo "hay que estudiar";
        break;
    case 'viernes':
        echo "hay que salir de fiesta";
        break;
    default: echo "hay que descansar";
}
echo "<br>";

#Ciclos
echo "<h2>Ciclos</h2>";
#while
$n = 1;
while($n < 10){
    $n++;
    echo $n. ",";
}
echo "<br>";
#do while
$p = 1;
do{
    $p++;
    echo $p. ",";
}while($p < 10);
echo "<br>";
#for
for($i = 0; $i <= 10; $i++){
    echo $i. ",";
}
?>