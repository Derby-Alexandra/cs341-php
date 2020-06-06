<?php
$artworkids = $_GET['artworkids'];
$artworkids = str_replace('[','', $artworkids);
$artworkids = str_replace(']','', $artworkids);
$results = $_SESSION['dbconnection']->query("SELECT * FROM artwork as a WHERE a.artworkid IN ($artworkids) JOIN artist_account AS b ON a.artistid = b.artistid");
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
        <h2 id="empty_cart">Thank you for shopping with us. Here is your cart:</h2>
<?php
        foreach($results as $result) {
?>
        <div class="index_grid_images">
            <div>
                <img src="<?php echo $result['imageurl']?>" class="index_image_width">
            </div>
            <div>
                <p>Artist Name: <?php echo $result['firstname']?> <?php echo $result['lastname']?></p>
                <p>Description: <?php echo $result['description']?></p>
                <p>Resolution: <?php echo $result['resolution']?></p>
                <p>Price: <?php echo $result['price']?></p>
                <button class="removefromcart" data-artworkid=<?php echo $result['artworkid']?>>Remove from Cart</button>
            </div>
        </div>
<?php
        }
?>
    </main>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
    <script type="text/javascript" src="scripts/javascript.js"></script>

</body>
</html>