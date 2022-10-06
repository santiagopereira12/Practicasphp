<?php
#clase de controlador
class controladorPlantilla{

    #metodo del controlador para llamar la plantilla
    public function ctrTraerPlantilla(){
        
        #llamando la plantilla.
        include "Vistas/plantilla.php";
    }
}

?>