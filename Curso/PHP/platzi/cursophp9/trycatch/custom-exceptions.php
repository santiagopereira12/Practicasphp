<?php

class michiException extends Exception{
    public function getMensaje(){
        return "no existe mensaje :c";
    }

    public function getMew(){
        return "mew mal";
    }
}

class dogException extends Exception{
    public function getGuau(){
        return "guau mal";
    }
}

try {
    $exception = readline("ingrese excepcion a lanzar: ");
    if($exception == "gato")
    throw new michiException("gato incorrepto\n");
    else
    throw new dogException("perro incorrepto\n");
} catch (michiException $th) {
    echo $th->getMessage()."\n";
    echo $th->getMew();
} catch (dogException $th){
    echo $th->getMessage()."\n";
    echo $th->getGuau();
}finally{
    echo "excepciones creadas";
}

?>