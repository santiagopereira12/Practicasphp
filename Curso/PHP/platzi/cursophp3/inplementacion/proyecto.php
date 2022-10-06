<?php
$palabras = array("computador", "desarrollo", "ascenso", "plataformas", "infraestructura");
$desorden_palabras = array();

$form = "<form action='presentar.php'";

for($i = 0; $i < count($palabras); $i++){
    $form.="la palabra: ".str_shuffle($palabras[$i])." "."<input type='text' name='palabra'.[$i]>"."<br>";
}

$button = "<button type='submit'>Validar</button>";
$formCierre = "</form>";

echo $form.$button.$formCierre;
?>