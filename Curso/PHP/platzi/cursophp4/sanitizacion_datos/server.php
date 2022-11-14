<?php

$nombre = $_POST["name"];
$userName = $_POST["user"];
$email = $_POST["correo"];
$edad = $_POST["edad"];

$texto = htmlentities($nombre);
$coment = addslashes($userName);
$letras = preg_replace("/\d/", "", $userName);
$numeros = preg_replace("/\D/", "", $userName);
$correo = filter_var($email, FILTER_SANITIZE_EMAIL);
$entero = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Usuario</title>
</head>
<body>
    <p>Nombre:</p>
    <?=$texto?>

    <p>Nombre de Usuario:</p>
    <?=$letras?>

    <p>Numero de usuario:</p>
    <?=$numeros?>

    <p>Correo electronico:</p>
    <?=$correo?>

    <p>Edad:</p>
    <?=$edad?>
</body>
</html>