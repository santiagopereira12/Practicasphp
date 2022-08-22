<?php

#controlador de cormularios(clase).
class controladorFormularios{
    #metodo de registro.
    static public function ctrRegistro(){
        if(isset($_POST["registroNombre"])){
            $tabla = "registros";
            $datos = array("nombre" => $_POST["registroNombre"], 
                           "apellido" => $_POST["registroApellido"],
                           "email" => $_POST["registroCorreo"],
                           "password" => $_POST["registroContraseña"]);
            $respuesta = modeloFormularios ::mdlRegistro($tabla, $datos);
            return $respuesta;
        }
    }
    #Seleccionar Regstros
    static public function ctrSeleccionarRegistros($item, $valor){
        $tabla = "registros";
        $respuesta = modeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
        return $respuesta;
    }
    #Ingreso de la pagina.
    public function ctrIngreso(){
        if(isset($_POST["registroCorreo"])){
            $tabla = "registros";
            $item = "correo";
            $valor = $_POST["registrarCorreo"];
            $respuesta = modeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
            if($respuesta["correo"] == $_POST["registrarCorreo"] && $respuesta["contraseña"] == $_POST["pwd"]){
                $_SESSION["validarIngreso"] = "ok";
                echo '<script>
                    if (windows.history.replaceState){
                        windows.history.replaceState(null, null, windows.location.href);
                    }
                    window.location = "index.php?modulo=inicio";
                    </script>';
            }else{
                echo '<script>
                    if (windows.history.replaceState){
                        windows.history.replaceState(null, null, windows.location.href);
                    }
                    </script>';
                echo '<div class="alert alert-danger">Credenciales incorrectas</div>';
            }
        }
    }
    #Actualizar el registro.
    static public function ctractualizarRegistro(){
        if(isset($_POST["actualizarNombre"])){
            if($_POST["actualizarContraseña"] != ""){
                $password = $_POST["actualizarContraseña"];
            }else{
                $password = $_POST["passwordActual"];
            }
            $tabla = "registros";
            $datos = array("id" => $_POST["idUsuario"],
                           "nombre" => $_POST["actualizarNombre"], 
                           "apellido" => $_POST["actualizarApellido"],
                           "email" => $_POST["actializarCorreo"],
                           "password" => $password);
            $respuesta = modeloFormularios ::mdlactualizarRegistro($tabla, $datos);
            return $respuesta;
        }
    }
    #Eliminar Registros.
    public function ctrEliminarRegistro(){
        if(isset($_POST["eliminarRegistro"])){
            $tabla = "registros";
            $valor = $_POST["eliminarRegistro"];
            $respuesta = modeloFormularios::mdlEliminarRegistro($tabla, $valor);
            if($respuesta == "ok"){
                echo '<script>
                if (windows.history.replaceState){
                    windows.history.replaceState(null, null, windows.location.href);
                }
                window.location = "index.php?modulo=inicio";
                </script>';
            }
        }
    }
}
?>