
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
        <h2 id="empty_cart">Your cart is empty</h2>
        <div id="cart_items_grid"></div>
        <div id="checkout_button_div">
            <button class="checkout_button" id="checkout_button">Proceed to Checkout</button>
        </div>  
    </main>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
    <script type="text/javascript" src="scripts/imagedata.js"></script>
    <script type="text/javascript" src="scripts/cart.js"></script> 

</body>
</html>