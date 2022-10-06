<?php
if(isset($_SESSION["validarIngreso"])){
    echo '<script>window.location = "index.php?modulo=registro";</script>';
    return;
}else{
    if($_SESSION["validarIngreso"] != "ok"){
        echo '<script>window.location = "index.php?modulo=registro";</script>';
        return;
    }
}

$usuarios =  controladorFormularios::ctrSeleccionarRegistros(null, null);
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>CANTIDAD DATOS</th>
            <th>PRIMER NOMBRE</th>
            <th>APELLIDO</th>
            <th>CORREO ELECTRONICO</th>
            <th>FECHA DE CREACION</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $key => $value): ?>
        <tr>
            <td><?php echo ($key+1);?></td>
            <td><?php echo $value["nombre"];?></td>
            <td><?php echo $value["apellido"];?></td>
            <td><?php echo $value["correo"];?></td>
            <td><?php echo $value["fecha"];?></td>
            <td>
                <div class="btn-group">
                    <div class="px-1">
                    <a href="index.php?modulo=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                    </div>
                    <form method="post">
                        <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        <?php
                        $eliminar = new controladorFormularios();
                        $eliminar -> ctrEliminarRegistro();
                        ?>
                    </form>
                </div>
            </td>
        </tr>
        <?php endforeach?>
    </tbody>
</table>