<?php

class michiException extends Exception{
    public function getMensaje(){
        return "no existe mensaje :c";
    }

    public function getMew(){
        return "mew mal ";
    }
}

class dogException extends Exception{
    public function getGuau(){
        return "guau mal ";
    }
}

try {
    $exception = readline("ingrese excepcion a lanzar: ");
    if($exception == "gato")
    throw new michiException("gato incorrepto\n");
    else if($exception == "perro")
    throw new dogException("perro incorrepto\n");
    else
    throw new Exception("opcion invalida ");
    
} catch (michiException $th) {
    echo $th->getMessage()."\n";
    echo $th->getMew();

} catch (dogException $th){
    echo $th->getMessage()."\n";
    echo $th->getGuau();

} catch(throwable $th){
    echo $th->getMessage();

}finally{
    echo "excepciones creadas";
}

?>