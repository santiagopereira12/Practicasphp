

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="nuevo4.php" method="POST">
        Valor A:
        <input type="text" name="valorA" id="">
        Valor B:
        <input type="text" name="valorB" id="">
        <input type="submit" value="calcular">
    </form>
</body>
</html>

<?php
if($_POST){
    $numeroA = $_POST['valorA'];
    $numeroB = $_POST['valorB'];
    if($numeroA != $numeroB){
        echo "el valor A es un numero mayor al valor B digitado";
    }
}
?>