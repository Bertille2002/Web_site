<!-- formulaire pour creer un compte -->
 <?php
 require_once "../config/mysql.php" 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type='text/css' media='screen' href='assets_log/styles.css'>
    <title>Sign Up</title>
</head>
<body>
    <form method="POST" action="comptes.php">
        <h1>Sign Up</h1>
        <label for="first_name">First Name :</label>
        <input type="first_name" name="first_name" id="first_name" placeholder="Enter your first name">
        <br>
        <label for="last_name">Last Name :</label>
        <input type="last_name" name="last_name" id="last_name" placeholder="Enter your last name">
        <br>
        <label for="username">Username :</label>
        <input type="username" name="username" id="username" placeholder="Enter your username">
        <br>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password" placeholder="Enter your password">
        <br>
        <label for="password_ver">Confirm password :</label>
        <input type="password_ver" name="password_ver" id="password_ver" placeholder="Enter your password again">
        <br>
        <button type="submit" value="Sign_up" name="ok">Register</button>
        <br>
        <p>Already a member ?<a href="login_index.php">Login here</a></p>
    </form>
</body>
</html>
