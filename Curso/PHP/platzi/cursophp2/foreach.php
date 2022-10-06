<?php
$bebidas = array(
    "gaseosa" => 1500,
    "jugo" => 1800,
    "cafe" => 1700,
    "agua" => 1000
);

foreach($bebidas as $producto => $precio){
    if($producto == "cafe"){
        continue;
    }/*else if($producto == "agua"){
        echo "la ".$producto." cuesta: ".$precio;
        break;
    }*/
    echo "bebidas: ".$producto." precio: ".$precio. "\n";
}
?>