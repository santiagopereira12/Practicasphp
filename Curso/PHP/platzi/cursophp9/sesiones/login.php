<?php

session_start();

$users = [
    array(
        "username" => "Santiago",
        "email" => "correo@email.com"
    ),
    array(
        "username" => "Sergio",
        "email" => "correo@emailx.com"
    )
];

$user = $_GET["user"] ?? "";

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];


?>