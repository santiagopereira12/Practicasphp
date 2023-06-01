<?php

try{
    $resultado = 20/0;
    echo $resultado;
}catch(Throwable $e) {
    echo $e->getMessage();
}

echo "<br>";
echo "Esto pasa si o si";

?>