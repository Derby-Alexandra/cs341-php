<?php
// Start the session
        var_dump($_SESSION['userdata']);
session_start();
include 'dbconnect.php';
        var_dump($_SESSION['userdata']);
?>
<!DOCTYPE html>
<html lang="en-US">   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CS 341 | Alexandra Derby | BYU-Idaho</title>
    <meta name="description" content="Artist Account Information">
    <!-- <script type="text/javascript" src=""></script> -->
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <?php include 'artistheader.php';?>
    </header>
    <main>
        <p> Artist ID: <?php echo $_SESSION['userdata']['artistid']?><br>
            First Name: <?php echo $_SESSION['userdata']['firstname']?><br>
            Last Name: <?php echo $_SESSION['userdata']['lastname']?><br>
            Email: <?php echo $_SESSION['userdata']['email']?><br>
            Accumulated Sales: <?php echo $_SESSION['userdata']['accumulatedsales']?><br>
        </p>
    </main>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
    <script type="text/javascript" src="scripts/imagedata.js"></script> 
    <script type="text/javascript" src="scripts/javascript.js"></script> 
</body>
</html>