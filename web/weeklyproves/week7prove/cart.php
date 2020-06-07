<?php
// Start the session
session_start();
include 'dbconnect.php';
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);
$artworkids = $_GET['artworkids'];
$artworkids = str_replace('[','', $artworkids);
$artworkids = str_replace(']','', $artworkids);
if (strlen($artworkids) > 0) {
    $results = $_SESSION['dbconnection']->query("SELECT * FROM artwork as a JOIN artist_account AS b ON a.artistid = b.artistid WHERE a.artworkid IN ($artworkids)");
}
?>
<!DOCTYPE html>
<html lang="en-US">   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CS 341 | Alexandra Derby | BYU-Idaho</title>
    <meta name="description" content="PHP Data Access - Week 5">
    <!-- <script type="text/javascript" src=""></script> -->
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <header>
        <?php include 'header.php';?>
    </header>
    <main>
<?php        
        if (strlen($artworkids) > 0) {
            
        foreach($results as $result) {
?>
        <div id="index_grid_images_<?php echo  $result['artworkid'] ?>" class="index_grid_images">
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
                <form action="checkout.php" method="POST">
                    <button>Checkout</button>
                </form>
<?php
        } else {
?>
        <h2>Your Cart is Empty</h2>
<?php
        }
?>
    </main>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
    <script src="scripts/removeitem.js"></script>
</body>
</html>