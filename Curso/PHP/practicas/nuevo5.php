<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="nuevo5.php" method="POST">
        Valor A:
        <input type="text" name="valorA" id="">
        Valor B:
        <input type="text" name="valorB" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
if($_POST){
    $numA = $_POST['valorA'];
    $numB = $_POST['valorB'];
    if(($numA != $numB) && ($numA < $numB)){
        echo "estos dos digitos son diferentes, en donde el valor A es menor al valor de B";
    }
}
?>