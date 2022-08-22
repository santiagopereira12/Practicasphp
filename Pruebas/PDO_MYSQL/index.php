<?php

require_once "Controladores/plantilla_Controlador.php";
require_once "Controladores/fomularios_Controlador.php";
require_once "Modelos/formulario_Modelo.php";

$plantilla = new controladorPlantilla();
$plantilla -> ctrTraerPlantilla();
?>