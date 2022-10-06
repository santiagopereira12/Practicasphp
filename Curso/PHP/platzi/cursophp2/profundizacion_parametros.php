<?php
/*function suma($a = 1, $b = 1){
    echo "la suma de ".$a." mas ".$b." es igual: ".$a+$b."\n";
}
suma(3, 5);
suma();

$arreglo1 = [1, 2, 3, 4];
$arreglo2 = [5, 6, 7, 8];
$resultado = [...$arreglo1, ...$arreglo2];
var_dump($resultado);*/

/*function suma ($num1, $num2){
    echo "la suma de $num1 mas $num2 es igual a: ".$num1+$num2."\n";
}
$numeros = [4, 8];
suma(...$numeros);*/

function suma_infinita(...$params){
    $suma = 0;
    foreach($params as $numero){
        $suma += $numero;
    }
    echo "el resultado de la suma es: $suma\n";
}
suma_infinita(1, 4, 7);
suma_infinita(2, 5, 8);
suma_infinita(3, 6, 9);
?>