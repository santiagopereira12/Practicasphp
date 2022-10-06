<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="nuevo9.php" method="POST">
        <input type="submit" name="btnValor" value="1">
        <input type="submit" name="btnValor" value="2">
        <input type="submit" name="btnValor" value="3">
    </form>
</body>
</html>

<?php
if($_POST){
    $boton = $_POST['btnValor'];
    switch($boton){
        case 1:
            echo "usted presiono el primer boton";
        break;

        case 2:
            echo "usted presiono el segundo boton";
        break;

        case 3:
            echo "usted presiono el tercer boton";
        break;
    }
}
?>