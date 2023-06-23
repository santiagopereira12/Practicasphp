<?php

use App\Classes\Michi;
use App\Classes\Michis_aprt;

function Create_Michis(){
    $mono = new Michi("Mono", "Amarillo", 4);
    $negro = new Michis_aprt("Onix", new DateTime("2021-05-15"), "Santigo");

    echo $mono->sayMew()." me adopto {$negro->getAdoptedBy()}";
}

?>