<?php
$dinero = readline("Ingrese la cantidad de dolares la cual posee: $");
$donaciones = (int) $dinero;

if($donaciones >= 100){
    echo "Usted puede hacer el retiro de su dinero\n";
    $retiro = readline("Cuanto dinero desea retirar:\n");
    switch($retiro){
        case 50:
            echo "Csted ha retirado $50 dolares";
        break;
        case 100:
            echo "Usted ha retirado $100 dolares";
        break;
        case 150:
            echo "Usted ha retirado $150 dolares";
        break;
        case 200:
            echo "Usted ha retirado $200 dolares";
        break;
        case 250:
            echo "Usted ha retirado $250 dolares";
        break;
        case 300:
            "Usted ha retirado 300 dolares";
        break;
    }
    echo "\nGracias por preferir bancos pichincha, que tenga buen día.";
}else{
    echo "usted aun no ha completado la cantidad necesaria para hacer retiros";
}
?>