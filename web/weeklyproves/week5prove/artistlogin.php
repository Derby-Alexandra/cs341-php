<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CS 341 | Alexandra Derby | BYU-Idaho</title>
    <meta name="description" content="Login Page">
    <!-- <script type="text/javascript" src=""></script> -->
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <?php include 'header.php';?>
    </header>
    <div>
        <p>Login to your account below:</p><br>
        <form action="artistaccount.php" method="POST">
            <label for="email">Email:</label>
            <input type="text" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br>

            <button type="submit">Login</button>
        </form><br>
        <p>Create an account:</p><br>
        <form action="artistlogin.php" method="POST">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" required><br>
            
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" required><br>
            
            <label for="email">Email:</label>
            <input type="text" name="email" required><br>

            <label for="newpassword">Password:</label>
            <input type="password" name="newpassword" required><br>

            <button type="submit">Create Account</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
    <script type="text/javascript" src="scripts/imagedata.js"></script> 
    <script type="text/javascript" src="scripts/javascript.js"></script> 
</body>
</html>