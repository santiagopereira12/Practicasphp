<?php
$precio_cafe = [23, 4, 12, 18, 5];  
usort($precio_cafe, function($a, $b){
    return $a <=> $b;
});
var_dump($precio_cafe);
?>