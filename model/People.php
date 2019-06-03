<?php

class People{
    
    private $name;
    private $age;
    private $cpf;
    

    public function getName(){
        return  $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getAge(){
        return  $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getCpf(){
        return  $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    

}

    // public function registerPeople($con){}



?>