<?php

class User{
    public $type;
}

class Admin{
    public function adm(){
        return "Bienvenido Administrador";
    }
}

$user = new User;
$user -> type = new Admin;
echo $user->type->adm();

?>