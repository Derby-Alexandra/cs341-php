<?php
// Start the session
session_start();
include 'dbconnect.php';
$search_results = [];
if (isset($_POST['searchname'])) {
    $searchname = $_POST['searchname'];
    $query = "SELECT * FROM artwork WHERE firstName LIKE '%$searchname%' OR lastName LIKE '%$searchname%'";
    $search_results = $_SESSION['dbconnection']->query($query);
} else {
    $search_results = $_SESSION['dbconnection']->query("SELECT * FROM artwork");
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
        <form>
            <label for="searchname">Search artist name:</label>
            <input type="text" name="searchname">
            <button type="submit">Search</button>
        </form><br>
        
        <div class="index_grid_images">
            <div>
                <img src="" class="" id="">
            </div>
            <div>
                <p>Artist Name: <span></span></p>
                <p>Description: <span></span></p>
                <p>Resolution: <span></span></p>
                <p>Price: <span></span></p>
            </div>
        </div>
        
    </main>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
    <script type="text/javascript" src="scripts/imagedata.js"></script> 
    <script type="text/javascript" src="scripts/javascript.js"></script> 
</body>
</html>