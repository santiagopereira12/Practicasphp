<?php
$asientos = readline("ingresa cuantos asientos vas a comprar: ");
$disponibles = (int) $asientos;

if($disponibles <= 10){
    echo "Hay disponibilidad para tu compra";
}else if($disponibles == 11){
    echo "No tenemos esa cantidad pero podemos hacer una excepción.";
}else{
    echo "No tenmos disponibilidad para vender tantos boletos";
}
?>