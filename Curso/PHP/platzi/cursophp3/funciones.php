<?php

function concatenar($nombre, $apellido){
    echo $nombre. " " .$apellido."\n";
}
concatenar("santiago", "pereira");

function sumarNumeros($numeros){
    $suma = 0;
    for($i = 0; $i < 5; $i++){
        $suma = $suma + $numeros[$i];
        echo $suma."\n";
    }
}
sumarNumeros([2,5,7,3,4,8]);
?>