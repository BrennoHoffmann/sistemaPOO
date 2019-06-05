<?php 

$host = "mysql:host=localhost;dbname=sistemapoo;charset=utf8mb4;port=3306";
$dbUser = "root";
$dbPass = "";


try{
$con = new PDO($host, $dbUser, $dbPass);
$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    echo "Manutenção essa bagaça";

    echo $e->getMessage();
}

?>