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

            $query = $con->prepare("SELECT * FROM users WHERE user=?");
            $query->execute([$user]);
            $result = $query->fetchAll(PDO::FETCH_ASSOC);

            var_dump($result);


                break;
        }
        
	}


}


?>