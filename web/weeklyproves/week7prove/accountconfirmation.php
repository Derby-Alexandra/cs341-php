<?php
// Start the session
session_start();
// START: code to display errors
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);
// END: code to display errors
include 'dbconnect.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$newpassword = $_POST['newpassword'];
$stripeaccountid = $_POST['stripeaccountid'];
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
<?php
        if(!$_SESSION['dbconnection']->query("INSERT INTO artist_account (email, password, stripeaccountid, firstname, lastname, accumulatedsales) VALUES ('$email', '$newpassword', '$stripeaccountid', '$firstname', '$lastname', 0)")) {
?>
        <h3 id="confirmation">Error - Account not created. Please click <u><a href="artistlogin.php">HERE</a></u> to try again.</h3>
<?php 
        } else {
?>
                <h3 id="confirmation">Your account has been created! Please click <u><a href="artistlogin.php">HERE</a></u> to login.</h3>
<?php
            };
?>               
        </main>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
</body>
</html>