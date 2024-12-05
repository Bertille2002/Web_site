<!-- formulaire pour creer un compte -->
 <?php
 require_once "../config/mysql.php" 
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
    <div class="container">
        <div class="reg_form">
            <div class="head">
                <h1>Sign Up</h1>
            </div>
            <form method="POST" action="comptes.php">
                <div class="reg_group">
                    <input type="first_name" name="first_name" id="first_name" placeholder="First name">
                </div>
                <br>
                <div class="reg_group">
                    <input type="last_name" name="last_name" id="last_name" placeholder="Last name">
                </div>
                <br>
                <div class="reg_group">
                    <input type="username" name="username" id="username" placeholder="Username">
                </div>
                <br>
                <div class="reg_group">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <br>
                <div class="reg_group">
                    <input type="password" name="password_ver" id="password_ver" placeholder="Confirm password">
                </div>
                <br>
                <button class="button" type="submit" value="Sign_up" name="ok">Register</button>
            </form>
        </div>
        <div class="header_login">
            <p>Already a member ?  <a href="../index.php">Login here</a></p>
        </div>
    </div>
</body>
</html>
