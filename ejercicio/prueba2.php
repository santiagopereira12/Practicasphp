<?php
#declaración de variables
#Variable isset (pregunta si una vvariable externa existe)
if(isset($_GET["nombre"])){
    $nombre = $_GET["nombre"];
}else{
    $nombre = "Karen Ramirez";
}

$texto = "Primer repaso de $nombre";

if(isset($_GET["edad"])){
    $edad = $_GET["edad"];
}else{
    $edad = 21;
}

#Imprimir texto.
$frase = "<h1>" .$texto. ", con ".$edad." años";
echo $frase;

#Variable $_GET
echo "<hr>";
echo $_GET["nombre"];

#Condicionales
if($edad >= 18){
    echo "<h2>eres mayor de edad</h2>";
}else{
    echo "<h2>eres un niño apenas.</2>";
}

echo "<hr>";
echo "Nuevo Codigo";
#Funciones
compararNombre();
function compararNombre(){
    if(isset($_GET["nMujer"])){
        $nMujer = $_GET["nMujer"];
    }else{
        $nMujer = "Karen Murcia";
    }
    if(isset($_GET["edadMujer"])){
        $edadMujer = $_GET["edadMujer"];
    }else{
        $edadMujer = 21;
    }
    $palabras = "<h2>".$nMujer." primeras practicas con ".$edadMujer." años";
    echo $palabras;
}

echo "<br>";
#arrays
$personas = ["Karen","Lorena","Murcia","Parra"];
echo $personas[1];

echo "<br>";
echo "<h1>Listado</h1>";
foreach($personas as $nombres){
    echo "<li>".$nombres."</li>";
}
?>