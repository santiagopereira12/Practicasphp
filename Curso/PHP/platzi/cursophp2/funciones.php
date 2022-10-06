<?php

function pokemon(){
    $eleccion = rand(1, 10);
    switch($eleccion){
        case 1:
            echo "Charmander\n";
        break;
        case 2:
            echo "Bulbasaur\n";
        break;
        case 3:
            echo "Squirtle\n";
        break;
        default:
            echo "no existe el pokemon solicitado\n";
    }
}

pokemon();
pokemon();
pokemon();
pokemon();
pokemon();
?>