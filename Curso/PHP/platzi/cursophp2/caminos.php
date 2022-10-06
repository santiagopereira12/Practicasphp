<?php
$tienda = readline("a que tienda desea ingresar: ");
$n_tienda = (int)$tienda;
$camino_anterior = 0;
$camino_actual = 1;
for ($i = 2; $i <= $n_tienda; $i++){
    $temporal = $camino_actual;
    $camino_actual += $camino_anterior;
    $camino_anterior = $temporal;
    echo "caminos: ".$camino_actual."\n";
}
?>