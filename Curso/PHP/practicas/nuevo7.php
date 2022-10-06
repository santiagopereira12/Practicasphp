<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="nuevo7.php" method="POST">
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
    $numeradorA = $_POST['valorA'];
    $numeradorB = $_POST['valorB'];

    $suma = $numeradorA+$numeradorB;
    $resta = $numeradorA-$numeradorB;
    $multiplicacion = $numeradorA*$numeradorB;
    $division = $numeradorA/$numeradorB;

    echo "<br>".$suma;
    echo "<br>".$resta;
    echo "<br>".$multiplicacion;
    echo "<br>".$division;

    if(($numeradorA == $numeradorB) && ($numeradorA == 5)){
        echo "<br>Los valores ingresados son identicos y el valor ingrsado en A es 5";
    }


}
?>