<?php

$data = "Curso de php a ver si lo comprendo";
echo $data[15];
echo "<br>";

$post = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum qui expedita nihil, amet eveniet nobis ab officiis, laudantium optio odio, velit illum dignissimos hic? Saepe autem atque dolore. Ex, error.';
$extract = substr($post, 0, 50);
echo "$extract... [ver mas]<br>";

$datos = 'Javascript, php, laravel';
$tags = explode(',', $datos);
echo "<pre>";
var_dump($tags);
echo "<br>";

$courses = ['Javascript', 'php', 'laravel'];
echo implode(',', $courses);
echo "<br>";

$curso = "   curso de php   ";
$union = trim($curso);
echo "<pre>";
echo "Estoy aprendiendo con el $union, y avanzando";