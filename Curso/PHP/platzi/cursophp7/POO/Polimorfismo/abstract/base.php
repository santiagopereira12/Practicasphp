<?php

abstract class base{
    protected $name;
    private function getClassName(){
        return get_called_class();
    }

    public function login(){
        return "Mi nombre es $this->name desde la clase {$this->getClassName()} ";
    }
}

class admin extends base{
    public function _constructor($name){
        $this->name = $name;
    }
}

class user extends base{
    public function _constructor($name){
        $this->name = $name;
    }
}

class guest extends base{
    protected $name = 'invitado';
}

$guest = new guest();
echo $guest->login()."<br>";

$user = new user();
echo $user->login();

?>