<?php

require_once "model/People.php";

class PeopleController{
	public function view($server){

        switch ($server) {
            case 'GET':
                require_once "view/register.php";
                break;
            
            case 'POST':
                $newPerson = new People();
                $newPerson->setName($_POST['name']);
                $newPerson->setAge($_POST['age']);
                $newPerson->setCpf($_POST['cpf']);

                $_REQUEST['person'] = $newPerson;

                require_once "view/success.php";

                break;
        }
        
	}


}


?>