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
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <h1><a href="index.php">Dreamy Photo Sales</a></h1>
        <nav>
            <ul>
                <li class="link_font"><a href="index.php">Browse</a></li>
                <li class="link_font"><a href="cart.php">Cart</a></li>
            </ul>
        </nav>
    </header>
    <div id="grid_for_images" class="grid_for_images"></div>
    <div id="image_zoom" class="image_zoom">
        <div class="child_div_image">
            <div class="close_image" onclick="close_image()" id="close_image">X</div>
            <img id="zoom_style" class="zoom_style">
            <div id="para_zoom" class="para_zoom">
                Original Photography - Matte Print<br>
                Price: $100.00<br>
                <button onclick="add_to_cart()">Add to Cart</button>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
    <script type="text/javascript" src="scripts/imagedata.js"></script> 
    <script type="text/javascript" src="scripts/javascript.js"></script> 
</body>
</html>