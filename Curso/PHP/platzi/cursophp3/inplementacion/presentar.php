<?php
$palabras = array("computador", "desarrollo", "ascenso", "plataformas", "infraestructura");

for($i = 0; $i < count($palabras); $i++){
    if($_REQUEST["palabra".$i] == $palabras[$i]){
        echo "La palabra ingresada es correcta."."<br>";
    }else{
        echo "la palara ingresada es incorrecta, la pabra era: ".$palabras[$i]."<br>";
    }
}

?>