<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="nuevo6.php" method="POST">
        Valor A:
        <input type="text" name="valorA" id="">
        Valor B:
        <input type="text" name="valorB" id="">
        <input type="submit" value="Digitar">
    </form>
</body>
</html>

<?php
if($_POST){
    $valoA = $_POST['valorA'];
    $valoB = $_POST['valorB'];

    echo "Operaciones de los valores ".$valoA." y ".$valoB;

    //Suma
    $suma = $valoA + $valoB;
    //Resta
    $resta = $valoA - $valoB;
    //Multiplicación
    $multiplicacion = $valoA * $valoB;
    //división
    $division = $valoA/$valoB;

    //Impresiones de resultados
    echo "<br>".$suma;
    echo "<br>".$resta;
    echo "<br>".$multiplicacion;
    echo "<br>".$division;
}
?>