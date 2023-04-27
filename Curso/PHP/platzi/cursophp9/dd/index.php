<?php

require("vendor/autoload.php");

class persona{
    protected $pertenencias = [];
    protected $nombre;

    function __contruct(string $name){
        $this->nombre = $name;

        for($i=0; $i<=5; $i++)
        $this->pertenencias[$i] = new pertenenciasPersonales();
    }
}

class pertenenciasPersonales{
    protected $home = 5;
    protected $description = "tiene más cosas";

    public function get_description() : string {
        return $this->description;
    }
}

$vivienda = array(
    "pais"=>"Colombia",
    "ciudad"=>"Bogota",
    "localidad"=>[
        "casa"=>"suba",
        "apartamento"=>"usaquen",
        "local"=>"chapinero",
        "automovil"=>"castilla"
    ],
    "total personas"=>3,
    "personas"=>[
        new persona("Santiago"),
        new persona("Cristian"),
        new persona("Armando")
    ]
);

dd($vivienda);

?>