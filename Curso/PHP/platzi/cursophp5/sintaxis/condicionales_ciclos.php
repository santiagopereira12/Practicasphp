<?php
$num = 15;

if ($num < 10) {
    echo "El numero $num es menor a 10<br>";
}else{
    echo "El numero $num es mayor a 10<br>";
}

for($i = 0; $i < 10; $i++){
    echo "<br> $i Hola numdo<br>";
}

$declare = 1;
do{
    echo "<br>adios mundo";
    $declare++;
}while($declare == 10);
?>