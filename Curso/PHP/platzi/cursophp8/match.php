<?php

function get_country_name($country){
    $name = "";

    switch ($country){
        case 'COL':
            $name = "Colombia";
        break;
        case 'EEUU':
            $name = "Estados Unidos";
        break;
        case 'MEX':
            $name = "Mexico";
        break;
        case 'VEN':
            $name = "Venezuela";
        break;
        default :
        $name = "Lo siento no conozco ese pais";
        break;
    }

    return $name;
}

function get_meal_name($comida){
    return match($comida){
        "HMB"=>"Hamburguesa",
        "PZZ" => "Pizza",
        "SDW" => "Sandwich",
        default => "no tenemos esa comida"
    };
}


echo get_country_name("COL");
echo "\n";
echo get_meal_name("HMB");
