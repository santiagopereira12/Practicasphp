<?php
//Alterar
$txt = "AprEndIrnEdo PHP";
echo $txt;
echo "<br>";
echo strtolower($txt);
echo "<br>";
echo strtoupper($txt);
echo "<br>";
echo ucfirst($txt);
echo "<br>";
echo lcfirst($txt);
echo "<br><br>";

//remplazar
$slug = str_replace(" ", "-", $txt);
echo strtolower($slug);
echo "<br><br>";

//modificación
$code = 1234;
echo str_pad($code, 8, "#", STR_PAD_BOTH);
echo "<br><br>";

//etiquetas
$text = "<h1>Hola Mundo empezamos a desquiciarnos jeje</h1>";
echo strip_tags($text);
echo "<br><br>";

//caracter especiales
$texto = "Este es un día muy especial ya que no cumplo años";
echo strtoupper($texto);
echo "<br>";
echo mb_strtoupper($texto);
