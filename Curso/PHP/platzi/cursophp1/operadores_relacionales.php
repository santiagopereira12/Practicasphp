<?php
$a = 5;
$b = 5;
$b2 = "5";
$c = 7;
$d = 4;
$f = 8;

//== Igualdad
var_dump($a == $b2);
echo "\n";
//=== Idéntico
var_dump($a === $b);
var_dump($a === $b2);
echo "\n";
//!= Diferentes
var_dump($a != $b2);
var_dump($a != $c);
// !== Diferente segun tipo de dato
var_dump($a !== $b2);
var_dump($a !== $b);
echo "\n";
// < Menor que
var_dump($a < $b);
var_dump($d < $b);
echo "\n";
// > mayor que
var_dump($a > $b2);
var_dump($c > $b);
echo "\n";
// >= mayor o igual que
var_dump($a >= $b);
var_dump($f >= $b);
// <= menor o igual que
var_dump($d <= $b);
var_dump($b <= $b2);
echo "\n";
// <=> nave espacial
echo (5 <=> 8). "\n";
echo (6 <=> 6). "\n";
echo (7 <=> 3). "\n";
echo "\n";
//?? Fusión de null
$edad1 = 25;
echo $edad2 ?? $edad1;
?>