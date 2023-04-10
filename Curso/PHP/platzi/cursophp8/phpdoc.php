<?php

/**
 * esta función recibe 2 parametros $num1 y $num2, que luego vana  aser sumados y retornados.
 * @param int $num1 
 * @param int $num2
 * @return int
 */

function sumar($num1, $num2){
    return $num1 + $num2;
}

$resultado = sumar(5, 6);
echo $resultado;

echo "\n";