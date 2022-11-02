<?php
$nomnre = "Santiago";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impresión de texto.</title>
</head>
<body>
    <?php echo "<b>Impresión de primer texto</b><br>"?>
    <?= "<i>Impresión de segundo texto</i>"?>
    <h1>Hola <?= $nomnre?></h1>
</body>
</html>