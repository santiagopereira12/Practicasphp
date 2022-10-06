<?php
function clear(){
    if(PHP_OS == "WINT"){
        system("cls");
    }else{
        system("cls");
    }
}

$palabras = ["Universidad", "Trabajo", "Curso", "Casa", "Transporte", "Destino", "Reto", "Formacion", "Aprendizaje", "Descamso"];

define("MAX_ATTEPS", 6);

echo "juego del Ahorcado\n\n";

// Inicio del Juego.
$eleccion_palabra = $palabras[rand(0, 9)];//elige una palagra del arreglo.
$eleccion_palabra = strtolower($eleccion_palabra);//valida toda la palabra en letras minusculas
$num_letras = strlen($eleccion_palabra);//hace el conteo de letras que posee la palabra
$letras = str_pad(" ", $num_letras, "_");
$intento_error = 0;

do{
    echo "Es una palabra de $num_letras letras \n";
    echo $letras."\n";
    
    //Solicitud de letras.
    $peticion = readline("Ingresa la letra que consideres: ");
    $peticion = strtolower($peticion);
    //Validación de letra en palabras.
    
    if(str_contains($eleccion_palabra, $peticion)){
        //validación de repetición de la letra para remplazarla.
        $offset = 0;
        while(($posicion_letra = strpos($eleccion_palabra, $peticion, $offset)) !== false){
            $letras[$posicion_letra] = $peticion;
            $offset = $posicion_letra + 1;
        }
    }else{
        clear();
        $intento_error++;
        echo "letra incorrecta, te quedan " .(MAX_ATTEPS - $intento_error). " intentos.\n";
    }
    clear();
}while($intento_error < MAX_ATTEPS && $letras != $eleccion_palabra);

clear();
if($intento_error < MAX_ATTEPS){
    echo "¡FELICIDADES HAS GANADO!";
}else{
    echo "¡PERDISTE! SUERTE PARA LA PROXIMA MALPARIDO.";
}

echo "La palabra era $eleccion_palabra";
echo "descubriste $letras";

?>