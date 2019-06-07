<?php 



    class Employees extends Users {


       private $money;
       

       public function __construct($name, $age, $cpf,$login,$password,$money){
        parent::__construct($name, $age, $cpf,$login,$password);
        $this->money = $money;
        
       }
       


       public function getMoney(){
        return $this->money;
       }
       public function setMoney($money){
        $this->money = $money;
       }

      
       
       public function registerPeople($con,$person){
        try{
            $query = $con->prepare("INSERT INTO employee(name, age, cpf, user, password, money) VALUES(?,?,?,?,?,?)");
            $query->execute([
                $person->getName(),
                $person->getAge(),
                $person->getCpf(),
                $person->getLogin(),
                $person->getPassword(),
                $person->getMoney()
            
            ]);
            return $query;
        } catch(PDOException $e){
            return false;
        }
    }
          
    }






    



















// class Employee extends People {


    //    private $login;
    //    private $password;
    //    private $money;

    //    public function __construct($name, $age, $cpf,$login,$password,$money){
    //     parent::__construct($name, $age, $cpf);
    //     $this->login = $login;
    //     $this->password = $password;
    //     $this->money = $money;
    //    }
       


    //    public function getLogin(){
    //     return $this->login;
    //    }
    //    public function setLogin($login){
    //     $this->login = $login;
    //    }

    //    public function getPassword(){
    //     return $this->password;
    //    }
    //    public function setPassword($password){
    //     $this->password = $password;
    //    }

    //    public function getMoney(){
    //     return $this->money;
    //    }
    //    public function setMoney($money){
    //     $this->money = $money;
    //    }
       
    //    public function registerPeople($con,$person){
    //     try{
    //         $query = $con->prepare("INSERT INTO employee(name, age, cpf, user, password,money) VALUES(?,?,?,?,?,?)");
    //         $query->execute([
    //             $person->getName(),
    //             $person->getAge(),
    //             $person->getCpf(),
    //             $person->getLogin(),
    //             $person->getPassword(),
    //             $person->getMoney()
            
    //         ]);
    //         return $query;
    //     } catch(PDOException $e){
    //         return false;
    //     }
    // }
          
    // }





?>