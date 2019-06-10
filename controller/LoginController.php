<?php

require_once "model/People.php";
require_once "model/User.php";
require_once "model/Employee.php";
require_once "model/conMySQL.php";


class LoginController{
	public function view($server){
            global $con;
            
        switch ($server) {
            case 'GET':
                require_once "view/login.php";
                break;
            
            case 'POST':
            $user = $_POST['user'];
            $password = $_POST['password'];

            $query = $con->prepare("SELECT * FROM users WHERE user=:user");
            $query->execute(["user" => $user]);
            $result = $query->fetch(PDO::FETCH_ASSOC);

           if (count($result) <=0) {
               echo "No exist";
               exit;
           } else {
               if(password_verify($password, $result['password'])){
                   
                        $person = new Users(
                            $result['name'],
                            $result['age'],
                            $result['cpf'],
                            $result['user'],
                            $result['password']
                        );
                   
                    $_REQUEST['person'] = $person;
                    require_once "view/success.php";
               }else {
                   echo "That's wrong";
                   exit;
               }
           }


                break;
        }
        
	}


}


?>