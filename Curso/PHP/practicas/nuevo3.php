<?php
$nombre = $_POST['txtNomb'];
$apellido = $_POST['txtApellido'];
echo "Hola ".$nombre." ".$apellido;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="nuevo3.php" method="post">
        Nombre:
        <input type="text" name="txtNomb" id="">
        <br>
        Apellido:
        <input type="text" name="txtApellido" id="">
        <input type="submit" value="enviar">
    </form>
</body>
</html>