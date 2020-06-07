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
    <meta name="description" content="Shopping Cart">
    <!-- <script type="text/javascript" src=""></script> -->
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <header>
        <?php include 'header.php';?>
    </header>
    <main>
        <div class="index_grid_images">
            <a href="artistlogin.php"><img src="images/artist-login-volcano.JPG" class="index_image_width"></a>
            <a href="browseartwork.php"><img src="images/browse-artwork-cloud.JPG" class="index_image_width"></a>
            
        </div>
    </main>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
</body>
</html>