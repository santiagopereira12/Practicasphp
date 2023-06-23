<?php

namespace App\Classes;

use App\Traits\Pets;

class Gato{

    use Pets;
    
    public function sayMew(){
        return "MEOOWWW!!!";
    }

    public function scratch(){
        return "gato enojado.";
    }
}

?>