<?php
include 'dbconnect.php';
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$newpassword2 = $_POST['newpassword2'];
$artistid = $_POST['artistid'];
var_dump($oldpassword);
var_dump($newpassword);
var_dump($newpassword2);
var_dump($artistid);
$databasepasswordrow = $_SESSION['dbconnection']->query("SELECT password FROM artist_account WHERE artist_id = '$artistid'");
    foreach($databasepasswordrow as $result) {
        $databasepassword = $result['password'];
    }
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
    <script>let userdata = JSON.parse(localStorage.getItem('userdata'))</script>
</head>
<body>
    <header>
        <?php include 'artistheader.php';?>
    </header>
    <main>
        <div>
<?php
        if($oldpassword == $databasepassword && $newpassword == $newpassword2) {
            $_SESSION['dbconnection']->query("UPDATE artist_account SET password = '$newpassword' WHERE artistid = '$artistid'");
?> 
            <p>Your password has been updated.</p>
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