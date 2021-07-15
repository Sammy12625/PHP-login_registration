<?php
session_start();
require 'db_connection.php';
require 'insert_user.php';
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
    <title>Sign Up - Vmade</title>
    <link rel="stylesheet" href="style.css" media="all" type="text/css">
</head>

<body>

<form action="" method="post">
    <h2 style="color: blueviolet">VMADE</h2>
    <h2>Sign Up Here! </h2>

    <div class="container">
        <label for="fname"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" id="fname" name="firstname" required>

        <label for="sname"><b>Second Name</b></label>
        <input type="text" placeholder="Enter Second Name" id="sname" name="secondname" required>

        <label for="email"><b>Email Address</b></label>
        <input type="email" placeholder="Enter Email Address" id="email" name="email" required>

        <label for="tel"><b>Tel No</b></label>
        <input type="tel" placeholder="Enter Tell No" id="tel" name="tel no" required><br><br>

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter username" id="username" name="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter password" id="password" name="user_password" required>

        <button type="submit"style="background-color: blueviolet">Submit</button>
    </div>
    <?php
    if(isset($success_message)){
        echo '<div class="success_message">'.$success_message.'</div>';
    }
    if(isset($error_message)){
        echo '<div class="error_message">'.$error_message.'</div>';
    }
    ?>
    <div class="container" style="background-color: dimgray">
        <a href="index.php"><button type="button" class="Regbtn"style="background-color: blueviolet">Login</button></a>
    </div>
</form>
</body></html>
