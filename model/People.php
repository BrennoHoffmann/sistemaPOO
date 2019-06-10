<?php

class People{

    
    private $name;
    private $age;
    private $cpf;

    public function __construct($name, $age, $cpf){
        $this->name = $name;
        $this->age = $age;
        $this->cpf = $cpf;
	}
    

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
    
    public function registerPeople($con,$person){
        try{
            $query = $con->prepare("INSERT INTO users(name, age, cpf) VALUES(?,?,?)");
            $query->execute([
                $person->getName(),
                $person->getAge(),
                $person->getCpf()
            
            ]);
            return $query;
        } catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

}

    



?>