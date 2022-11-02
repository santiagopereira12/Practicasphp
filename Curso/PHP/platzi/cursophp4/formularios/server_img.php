<?php
$nombrebase = $_FILES["imagen"]["name"];
$imagen = $_FILES["imagen"]["tmp_name"];
$ruta_subir = "imagenes/$nombrebase";
move_uploaded_file($imagen, $ruta_subir);

echo $nombrebase;
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
    <img src="<?=$ruta_subir?>" alt="<?=$nombrebase?>">
</body>
</html>