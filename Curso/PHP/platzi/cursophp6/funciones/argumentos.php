<?php

//Valores
function nuevo($name){
    return "hola $name";
}
echo nuevo('Santiago');
echo "<br>";

//Referencias
$course = "PHP";
function path(&$course){
    $course = "Laravel.";
    echo $course;
}
path($course);
echo $course;
echo "<br>";

//Predeterminado
function ultimo($nombre = 'Cristian'){
    return "Hola $nombre\n";
}
echo ultimo();
echo ultimo('Santiago');