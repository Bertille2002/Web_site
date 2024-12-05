<?php

$servername = "localhost";
$database = "users";
$util = "root";
$pssw = "root";
$error_msg = null;
$success = null;

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
        $success = "Successful registration !";
    } if($password != $password_ver) {
        $error_msg = "Password confirmation failed.";
    } else {
        $error_msg = "The username you have chosen already exists.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' media='screen' href='assets_log/stylesreg.css'>
    <title>Sign Up</title>
</head>
<body style="overflow: visible;">

    <?php if (!empty($success)): ?>
            <div class="success">
                <?= htmlspecialchars($success) ?>
            </div>
    <?php endif; ?>

    <br>

    <div class="home">
        <a href="../cyberportfolio.php">
            <button class="button_home" type="submit">BACK TO HOME PAGE</button>
        </a>
    </div>

</body>
</html>