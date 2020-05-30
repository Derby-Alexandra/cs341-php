<?php
// Start the session
session_start();
include 'dbconnect.php';
$email = $_POST['email'];
$password = $_POST['password'];
$accountinfo = $SESSION_['dbconnection']->query("SELECT * FROM artist_account WHERE email = '$email'");
foreach($accountinfo as $result) {
    if(!$password == $result['password']) {
        php header("artistlogin.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en-US">   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CS 341 | Alexandra Derby | BYU-Idaho</title>
    <meta name="description" content="Artist Account">
    <!-- <script type="text/javascript" src=""></script> -->
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <?php include 'artistheader.php';?>
    </header>
    <main>
        <div class="index_grid_images">
            <a href="accountinformation.php"><img src="images/account-info.JPG" class="index_image_width" alt="view account info"></a>
            <a href="artworkinformation.php"><img src="images/my-artwork.JPG" class="index_image_width" alt="view account artwork"></a>
        </div>
    </main>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
    <script type="text/javascript" src="scripts/imagedata.js"></script> 
    <script type="text/javascript" src="scripts/javascript.js"></script> 
</body>
</html>