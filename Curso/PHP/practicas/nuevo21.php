<?php

use persona as GlobalPersona;

class persona{
    public $nombre; //Propiedad.
    private $edad;
    public function asignarNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }
    public function imprimir(){
        echo "Buenas tardes soy ".$this->nombre;
    }
    public function mostrarEdad(){
        $this -> edad = 20;
        return $this->edad;
    }
}
// herencia
class trabajador extends persona{
    public $puesto;
    public function presentacion(){
        echo "hola me llamo ".$this->nombre.", y me desempeño como ".$this->puesto;
    }
}

$objTrabajador = new trabajador();
$objTrabajador -> asignarNombre("Santiago");
$objTrabajador -> puesto = "desarrollador IV de aplicaiones";
$objTrabajador -> presentacion();
?>