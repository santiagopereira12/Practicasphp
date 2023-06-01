<?php

function division(){
    return 25/0;
}

try {
    $resultado = division();
    echo $resultado;
} catch (Throwable $th) {
    //echo $th->getMessage();
    //echo $th->getCode();
    //echo $th->getFile();
    //echo $th->getLine();

    echo "<pre>";
    var_dump($th->getTrace());
    echo "</pre>";
}

?>