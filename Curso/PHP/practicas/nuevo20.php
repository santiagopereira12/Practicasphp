<?php

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
$objAlumno = new persona();
$objAlumno -> asignarNombre("Santiago");
$objAlumno2 = new persona();
$objAlumno2 -> asignarNombre("Cristian");
$objAlumno -> imprimir();

//imprimir
echo $objAlumno->nombre;
echo $objAlumno -> mostrarEdad();
echo $objAlumno2->nombre;

?>