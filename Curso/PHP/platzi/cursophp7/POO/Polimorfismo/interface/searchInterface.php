<?php

interface search{
    public function all();
}

class user implements search{
    public function all(){
        return "obteniendo a los usuarios, XML<br>";
    }
}

class post implements search{
    public function all(){
        return "obteniendo a los posts, JSON";
    }
}

$user = new user();
echo $user->all();

$admin = new post();
echo $admin->all();