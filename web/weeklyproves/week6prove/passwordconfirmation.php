<?php
// Start the session
session_start();
include 'dbconnect.php';
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$newpassword2 = $_POST['newpassword2'];
$databasepassword = $_SESSION['dbconnection']->query("SELECT password FROM artist_account WHERE password = '$oldpassword'");
?>
<!DOCTYPE html>
<html lang="en-US">   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CS 341 | Alexandra Derby | BYU-Idaho</title>
    <meta name="description" content="password confirmation">
    <!-- <script type="text/javascript" src=""></script> -->
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <?php include 'artistheader.php';?>
    </header>
    <main>
        <div>
<?php
        if($newpassword == $newpassword2 ) {
            $_SESSION['dbconnection']->query("UPDATE artist_account SET password = '$newpassword' WHERE password = '$oldpassword'");
    
?> 
            <p>Sorry, your passwords do not match. Please try again.</p>
<?php     
        } else {
?>
            <p>Sorry, your passwords do not match. Please try again.</p>
<?php
        }
?>
            
        </div>
    </main>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
</body>
</html>