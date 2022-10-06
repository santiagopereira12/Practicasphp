<?php
$usuarios = array("Cielo", "Humberto", "Emmanuel", "Santiago");
do{
    $name = readline("ingresar el nombre de usuario: ");
}while(in_array($name, $usuarios));
?>