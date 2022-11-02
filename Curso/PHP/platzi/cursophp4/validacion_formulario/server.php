<?php
if(isset($_POST["envio"])){
    if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
        echo "el nombre es ".$_POST["nombre"];
    }else{
        echo "no se ha ingresado ningun nombre";
    }
}else{
    echo "no ha detectado el envio de ningun formulario";
}


?>