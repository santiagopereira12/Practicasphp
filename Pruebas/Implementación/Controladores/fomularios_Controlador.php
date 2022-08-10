<?php

#controlador de cormularios(clase).
class controladorFormularios{
    #metodo de registro.
    static public function ctrRegistro(){
        if(isset($_POST["registroNombre"])){
            return "OK";
        }
    }
}
?>