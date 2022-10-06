<?php
function respuesta(){
    $aleatorio = rand(1, 4);
    switch($aleatorio){
        case 1:
            $frase = "Buen aprendizaje, se nota las ancias\n";
        break;
        case 2:
            $frase = "Dedicación al aprender\n";
        break;
        case 3:
            $frase = "tu dedicación es admirable\n";
        break;
        case 4:
            $frase = "animate a conocer más\n";
        break;
    }
    return $frase;
}
echo respuesta();
?>