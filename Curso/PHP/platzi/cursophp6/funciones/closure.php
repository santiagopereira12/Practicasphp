<?php

function nuevo(Closure $lang, $name){
    return $lang($name);
}

$español = function($name){
    return "hola $name";
};

$ingles = function($name){
    return "hello $name";
};

echo nuevo($ingles, "Santiago");