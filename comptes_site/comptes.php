<?php
$servername = "localhost";
$error_msg2 = "The username you have chosen already exists.";
$error_msg3 = "The password you have chosen already exists.";
$error_msg4 = "Password confirmation failed.";

try{
    $site_web = new PDO("mysql:host=$servername;dbname=site_web", $username, $password);
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
    if($username != "" && $password != "" && $first_name != "" && $last_name != "" && $password == $password_ver){
        $requete = $site_web->prepare("INSERT INTO Users VALUES ((MAX(ID)+1), :first_name, :last_name :username, :password)");
        $requete->execute(
            array(
                "first_name" => $first_name,
                "last_name" => $last_name,
                "username" => $username,
                "password" => $password
            )
        );
    }
}
?>