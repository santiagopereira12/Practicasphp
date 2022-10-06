<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="nuevo8.php" method="POST">
        Valor A:
        <input type="text" name="valorA" id="">
        Valor B:
        <input type="text" name="valorB" id="">
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>

<?php
if($_POST){
    $ingresoA = $_POST['valorA'];
    $ingresoB = $_POST['valorB'];

    if($ingresoA == $ingresoB){
        echo "los valores ingresados son identicos";
    }else{
        echo "los valores ingresados son diferentes";
    }
}
?>