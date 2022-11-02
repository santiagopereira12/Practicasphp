<?php
$usuarios = array(
    array(
        "id"=>0,
        "nombre"=>"Santiago",
        "edad"=>21
    ),
    array(
        "id"=>1,
        "nombre"=>"Cristian",
        "edad"=>19
    ),
    array(
        "id"=>2,
        "nombre"=>"Camilo",
        "edad"=>25
    )
);
$edad = 56;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php a Javascript</title>
</head>
<body>
    <script>
        let users = JSON.parse('<?= json_encode($usuarios) ?>');

        let edad = <?= $edad ?>;
    </script>
    <script src="index.js"></script>
</body>
</html>