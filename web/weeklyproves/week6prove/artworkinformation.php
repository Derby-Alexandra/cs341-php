<?php
// Start the session
session_start();
include 'dbconnect.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$artistid = $_GET['artistid'];
$artworks = [];
    $query = "SELECT artworkid, imageurl, price, description, resolution FROM artwork WHERE artistid = '$artistid'";
    $artworks = $_SESSION['dbconnection']->query($query);
?>
<!DOCTYPE html>
<html lang="en-US">   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CS 341 | Alexandra Derby | BYU-Idaho</title>
    <meta name="description" content="Artist Artwork Information">
    <!-- <script type="text/javascript" src=""></script> -->
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <?php include 'artistheader.php';?>
    </header>
    <main>
        <div>
            <p>Add New Artwork:</p>
            <form action="newartworkconfirmation.php" method="POST">
                
                <label for="imageurl">Image URL:</label>
                <input type="text" name="imageurl" required><br>  
                
                <label for="price">Price:</label>
                <input type="number" name="price" required><br>
                
                <label for="description">Description:</label>
                <input type="text" name="description" required><br>
                
                <label for="resolution">Resolution:</label>
                <input type="text" name="resolution" required><br>
                
                <input type="hidden" name="artistid" value=<?php echo $artistid; ?>>
                
                <button type="submit">Add</button>
            </form>
            <p>Your artwork will be added at the end of the list.</p>
        </div>
<?php
        foreach($artworks as $artwork) {
?>
        <div class="index_grid_images">
            <div>
                <img src="<?php echo $artwork['imageurl']?>" class="index_image_width">
            </div>
            <div>
                <p>Description: <?php echo $artwork['description']?></p>
                <p>Resolution: <?php echo $artwork['resolution']?></p>
                <p>Price: <?php echo $artwork['price']?></p>
                <br>
                <form action="deleteartwork.php" methond="POST">
                     <input type="hidden" name="artistid" value=<?php echo $artistid; ?>>
                     <input type="hidden" name="artworkid" value=<?php echo $artworkid; ?>>
                     <button type="submit">Delete</button>
                </form>
            </div>
        </div>
<?php
        }
?>
    </main>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
    <script type="text/javascript" src="scripts/imagedata.js"></script> 
    <script type="text/javascript" src="scripts/javascript.js"></script>
</body>
</html>