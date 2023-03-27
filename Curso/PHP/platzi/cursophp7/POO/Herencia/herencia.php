<?php

class User{
    public $name;

    public function _construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

class Admin extends User{
    //...
}

$admin = new Admin();
echo $admin->getName();