<?php
// Start the session
session_start();
include 'dbconnect.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$newpassword = $_POST['newpassword'];
$stripeaccountid = $_POST['stripeaccountid'];
$sql = "INSERT INTO artist_account (email, password, stripeaccountid, firstname, lastname, accumulatedSales) VALUES ($email, $newpassword, $stripeaccountid, $firstname, $lastname, 0)";
?>
<!DOCTYPE html>
<html lang="en-US">   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CS 341 | Alexandra Derby | BYU-Idaho</title>
    <meta name="description" content="Account Confirmation Page">
    <!-- <script type="text/javascript" src=""></script> -->
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <?php include 'header.php';?>
    </header>
    <main>
        <h3>Your account has been created! Please click <a href="artistlogin.php">HERE</a> to login.</h3>
    </main>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
    <script type="text/javascript" src="scripts/imagedata.js"></script> 
    <script type="text/javascript" src="scripts/javascript.js"></script> 
</body>
</html>