<!-- page de connexion -->

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets_log/styles.css'>
    <title>Login</title>
</head>
<body style="overflow: visible;">

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $error_msg = "Incorrect username or password !";

    try{
        $site_web = new PDO("mysql:host=$servername;dbname=site_web", $username, $password);
        $site_web->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "Error : ".$e->getMessage();
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username != "" && $password != ""){
            $req = $site_web->query("SELECT * FROM Users WHERE username = '$username' AND password = '$password' ");
            $rep = $req->fetch();
            if($rep['ID'] != false){
                echo "Successful login !";
            }
            else{
                echo $error_msg;
            }
        }
    }
    ?>

    <form method="POST" action="">
        <label for="username">Username</label>
        <input type="username" placeholder="Enter your username" id="username" name="username" required></input>
        <br>
        <label for="password">Password</label>
        <input type="password" placeholder="Enter your password" id="password" name="password" required></input>
        <br>
        <input type="submit" value="Se connecter" name="ok">
    </form>
    <p>No account yet ? <a href="registration.php">Sign up here</a></p>

</body>
</html>
