<?php
// Start the session
session_start();
include 'dbconnect.php';
$search_results = [];
if (isset($_POST['searchname'])) {
    $searchname = $_POST['searchname'];
    $query = "SELECT a.imageurl, a.price, a.description, a.resolution, a.artworkid, b.firstname, b.lastname FROM artwork AS a JOIN artist_account AS b ON a.artistid = b.artistid WHERE lower(b.firstname) LIKE lower('%$searchname%') OR lower(b.lastname) LIKE lower('%$searchname%')";
    $search_results = $_SESSION['dbconnection']->query($query);
} else {
    $search_results = $_SESSION['dbconnection']->query("SELECT a.imageurl, a.price, a.description, a.resolution, a.artworkid, b.firstname, b.lastname FROM artwork AS a JOIN artist_account AS b ON a.artistid = b.artistid");
}
?>
<!DOCTYPE html>
<html lang="en-US">   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CS 341 | Alexandra Derby | BYU-Idaho</title>
    <meta name="description" content="Browse Artwork">
    <!-- <script type="text/javascript" src=""></script> -->
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <?php include 'header.php';?>
    </header>
    <main>
        <form method="POST">
            <label for="searchname">Search artist name:</label>
            <input type="text" name="searchname">
            <button type="submit">Search</button>
        </form><br>
<?php
        foreach($search_results as $result) {
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
                <button class="addtocart" data-artworkid="<?php echo $result['artworkid']?>">Add to Cart</button>
            </div>
        </div>
<?php
        }
?>

        
    </main>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
    <script type="text/javascript" src="javascript.js"></script>
</body>
</html>