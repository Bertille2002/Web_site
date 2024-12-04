<!-- page de connexion -->

<?php
session_start();


$host = 'localhost';
$dbname = 'users';
$username = "root";
$password = "root";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error : ".$e->getMessage();
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['user_id'] = $user['ID'];
        header("Location: ../index.php?id=" . $user['ID']);
        exit();
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>

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
    <div class="container">
        <div class="head">
            <h1>Log in to your session</h1>
        </div>
        <div class="login_form">
            <form method="POST" action="login_index.php">
                <label for="username" class="title">
                    <br>
                    Username
                    <br>
                </label>
                <input type="username" id="username" name="username" class="input" required></input>
                <br>
                <label for="password" class="title">
                    <br>
                    Password
                    <br>
                </label>
                <input type="password" id="password" name="password" class="input" required></input>
            </form>
            <br>
            <button class="bttn" type="submit">Connexion</button>
        </div>
        <div class="header_2">
            <p>New user ?  <a href="registration.php">Create an account here</a></p>
            <a href="breach.php" target="_blank">
                <button class="breach">Show most recent breach</button>
            </a>
        </div>
    </div>
</div>

</body>
</html>
