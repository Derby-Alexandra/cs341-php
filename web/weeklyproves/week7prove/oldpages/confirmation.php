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
    <main>
        <p class="checkout_center">Thank you for placing your order with us!</p>
        <p class="checkout_center">Your order will be shipped to the following address:</p>
        <p class="checkout_center"><?=$address ?>, <?=$city ?>, <?=$province ?>, <?=$country ?></p><br>
        <div class="confirmation_cart_items" id="confirmation_cart_items">
        </div>
    </main>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
    <script type="text/javascript" src="scripts/imagedata.js"></script>
    <script type="text/javascript" src="scripts/confirmation.js"></script> 

</body>
</html>