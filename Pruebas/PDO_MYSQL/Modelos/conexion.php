<?php

class Conexion{

    static public function conectar(){

        #PDO("nombre del servidor; nombre de la base de datos", "usuario", "contraseña")

        $link = new PDO('mysql:host=127.0.0.1; dbname=practica-php', 'root', '');
        $link->exec("set names utf8");
        return $link;
    }
}

?>