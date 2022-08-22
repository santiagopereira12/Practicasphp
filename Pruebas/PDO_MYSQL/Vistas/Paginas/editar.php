<?php
if(isset($_GET["id"])){
    $item = "id";
    $valor = $_GET["id"];
    $usuario = controladorFormularios::ctrSeleccionarRegistros($tabla, $valor);
}
?>
<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" method="POST">
        <div class="form-group">
            <input type="email" class="form-control"<?php echo $usuario["correo"] ?> placeholder="enter email" id="email" name="actializarCorreo">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" <?php echo $usuario["nombre"] ?> placeholder="enter name" id="name" name="actualizarNombre">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" <?php echo $usuario["apellido"] ?> placeholder="enter lastname" id="last-name" name="actualizarApellido">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="enter password" id="pwd" name="actualizarContraseña">
            <input type="hidden" name="passwordActual" value="<?php echo $usuario["password"] ?>">
            <input type="hidden" name="idUsuario" value="<?php echo $usuario["id"] ?>">
        </div>
        <?php
        
        $registro = controladorFormularios::ctrRegistro();
        if($registro == "OK"){
            echo "el usuario ha sido registrado";
            #Script para eliminar registros del formulario.
            echo '<script>
            if(window.history.replaceState){
                window.history.replaceState(null, null, window.location.href);
            }
            </script>';
            echo '<div class="alert alert-success">Registro Exitoso</div>';
        }
        $actualizar = controladorFormularios::ctractualizarRegistro();
        if($actualizar == "ok"){
            echo '<script> 
            if(window.history.replaceState){
                window.history.replaceState(null, null, window.location.href);
            }
            </script>';
            echo '<div class="alert alert-success">Actualizacion exitosa</div>
            <script>
            setTimeout(function(){
                window.location = "index.php?pagina=inicio";
            }, 3000)';
        }
        ?>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
    
</div>