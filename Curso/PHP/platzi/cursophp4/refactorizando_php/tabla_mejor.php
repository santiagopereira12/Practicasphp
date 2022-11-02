<?php
$tabla_del_6 = [];

for($i=1; $i <= 10 ; $i++){
    $respuesta = 6 * $i;
    $resultado = "6 x $i = ".$respuesta;
    array_push($tabla_del_6, $resultado);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>
<body>
    <h1>TABLA DEL 6</h1>
    <ul>
        <?php foreach($tabla_del_6 as $valores): ?>
            <li><?=$valores?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>