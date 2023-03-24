<?php

class user{
    /*public //alcance publico
    protected //alcance protegido
    private //alcance protegido¨*/
    protected $cargo;
}

class oficios extends user{
    public function funciones($puesto){
        $this->cargo = $puesto;
    }
}

$trabajo = new oficios;
$trabajo->funciones("Desarrollador");

?>