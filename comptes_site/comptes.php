<?php

$servername = "localhost";
$database = "users";
$util = "root";
$pssw = "root";
$error_msg2 = "The username you have chosen already exists.";
$error_msg3 = "The password you have chosen already exists.";
$error_msg4 = "Password confirmation failed.";

try{
    $site_web = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $util, $pssw);
    $site_web->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Error : ".$e->getMessage();
}

if(isset($_POST['ok'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_ver = $_POST['password_ver']; 
    if($username != "" && $password != "" && $first_name != "" && $last_name != "" && $password == $password_ver){
        $requete = $site_web->prepare("INSERT INTO Users (first_name, last_name, username, password) VALUES (:first_name, :last_name, :username, :password)");
        $requete->execute(
            array(
                "first_name" => $first_name,
                "last_name" => $last_name,
                "username" => $username,
                "password" => $password
            )
        );
        echo "Successful registration !";
    } if($password != $password_ver) {
        echo "Password confirmation failed";
    } else {
        echo "Form fields are incomplete";
    }
}
?>