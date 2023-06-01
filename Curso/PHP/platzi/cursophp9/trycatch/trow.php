<?php

try {
    $pet = readline("¿Qué anial te gustaria adoptar?: ");
    if($pet != "perro" || $pet != "gato")
    throw new Exception("lo sentimos ese animal: $pet, no existe en esta tienda");

    echo "Felicidades por la adopción de $pet";
} catch (\Throwable $th) {
    echo $th->getMessage();
}

?>