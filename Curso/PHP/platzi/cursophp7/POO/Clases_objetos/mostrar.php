<?php

include "Person.php";
include "user.php";
include "administrator.php";

$user = new user;
$user->type = new admin;
echo $user->type->greet();
?>