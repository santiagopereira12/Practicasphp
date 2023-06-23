<?php

namespace App\Classes;

use App\Traits\Pets;

class Perro{

    use Pets;
    
    public function Ladrar(){
        return "WOUF WOUF!!";
    }

    public function Happy(){
        return "Moviendo la colita";
    }
}

?>