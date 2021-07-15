<?php
session_start();
require 'db_connection.php';
require 'login.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
    header('Location: home.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Vmade</title>
    <link rel="stylesheet" href="style.css" media="all" type="text/css">
</head>

<body>

<form action="" method="post">
    <h2 style="color: blueviolet;font-family: 'Arial Black'">VMADE</h2>
    <h2>Login</h2>

    <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter username" id="username" name="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter password" id="password" name="user_password" required>

        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
            </label>
        </div>

        <button type="submit"style="background-color: blueviolet;font-size: 30px">Login</button>
    </div>
    <?php
    if(isset($success_message)){
        echo '<div class="success_message">'.$success_message.'</div>';
    }
    if(isset($error_message)){
        echo '<div class="error_message">'.$error_message.'</div>';
    }
    ?>
    <div class="container">
        <a href="signup.php"><button type="button" class="Regbtn"style="background-color: blueviolet">Create an account</button></a>
    </div>
</form>
</body></html>
