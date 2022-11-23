<?php

namespace App;

class Validate{
    public static function correo($value){
        return (bool) filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}