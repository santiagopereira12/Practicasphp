<?php

interface Person{
    public function getName();
}

class Admin implements Person{
    public $name;
    public function _contructor($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

$admin = new Admin('Santiago');
echo $admin->getName();