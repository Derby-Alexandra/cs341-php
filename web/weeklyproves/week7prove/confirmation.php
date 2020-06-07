<?php
$address = htmlspecialchars($_POST["address"]);
$city = htmlspecialchars($_POST["city"]);
$province = htmlspecialchars($_POST["province"]);
$country = htmlspecialchars($_POST["country"]);
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
        <p class="checkout_center">Thank you for placing your order with us!</p>
        <p class="checkout_center">Your order will be shipped to the following address:</p>
        <p class="checkout_center"><?=$address ?>, <?=$city ?>, <?=$province ?>, <?=$country ?></p><br>
    </main>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
</body>
</html>