<?php

function estudiante($rango){
    if($rango >= 20000){
        echo "tienes los puntos suficientes para tener una beca";
    }else{
        echo "no tienes los puntos suficientes para la beca";
    }
}

$puntos = (int) readline("ingresa los puntos los cuales posees en este momento: ");
estudiante($puntos);
?>