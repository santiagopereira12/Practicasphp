<?php
#Codigo espagueti
echo "<h1>Codigo espagueti o imperativo</h1>";

#declaracion de variables.
$automovil1 = (object)["marca"=>"Audi", "modelo"=>"A4"];
$automovil2 = (object)["marca"=>"KTM", "modelo"=>"RC200"];

#llamar valores por medio de una función
function mostrar($vehiculo){
    echo "<p>buenas mi vehiculo es un $vehiculo->marca, $vehiculo->modelo</p>";
}
mostrar($automovil1);
mostrar($automovil2);

echo "<hr>";

#Programación Orientada Objetos (POO)
echo "<h1>Programación Orientada Objetos (POO)</h1>";
class Automovil{
    public $marca;
    public $modelo;

    public function mostrar(){
        echo "<p>Hola, tengo un auto movil y es $this->marca, $this->modelo</p>";
    }
}

#declaración del objeto
$a = new Automovil();
$a -> marca = "BMW";
$a -> modelo = "i4 M50";
$a -> mostrar();

$b = new Automovil();
$b -> marca = "Honda";
$b -> modelo = "CB190R";
$b -> mostrar();
?>