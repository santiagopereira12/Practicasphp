<?php
$nomed = array("santiago"=>20, "emmanuel"=>22, "cristian"=>19);
$frutas = ["fresas"=>200, "banano"=>800, "naranja"=>500];
$estudiantes = array("critian"=>array("edad"=>19, "carrera"=>"Gastronomia"),
"santiago"=>array("edad"=>20, "carrera"=>"ing.software"),
"emmanuel"=>array("edad"=>22, "carrera"=>"comunicación social"));

echo "la edad de Emmanuel es: ".$nomed["emmanuel"];
echo "\nla Fresa cuesta: ".$frutas["fresas"]." pesos";
echo "\nla carrera que estudia Santiago es: ".$estudiantes["santiago"]["carrera"];
?>