<?php
$celular_llamada = true;
$celular_mensaje = true;
$celular_corre = false;
$celular_vuela = false;

var_dump($celular_corre && $celular_vuela);
var_dump($celular_llamada && $celular_mensaje);
var_dump($celular_mensaje && $celular_corre);

var_dump($celular_llamada || $celular_mensaje);
var_dump($celular_vuela || $celular_mensaje);

var_dump(!$celular_llamada);
?>