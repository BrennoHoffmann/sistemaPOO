<?php
$controller = key($_GET);
$controller.= "Controller";

require_once "controller/$controller.php";

$object = new $controller();
$object->view($_SERVER['REQUEST_METHOD']);

?>