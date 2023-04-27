<?php

setcookie(
    name: "subdomain_cookie",
    value: "solo esta disponible en una carpeta",
    expires_or_options: 0,
    path: "/practicasphp/Curso/PHP/platzi/cursophp9/coockies/Platzi/configuracion/",
    domain: "localhost",
    secure: false,
    httponly: true
);

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";

?>