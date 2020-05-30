<?php
// Start the session
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
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
            Add New Artwork:
            <form action="newartworkconfirmation.php" method="POST">
                
                <label for="imageurl">Image URL:</label>
                <input type="text" name="imageurl" required><br>  
                
                <label for="price">Price:</label>
                <input type="number" name="price" required><br>
                
                <label for="description">Description:</label>
                <input type="text" name="description" required><br>
                
                <label for="resolution">Resolution:</label>
                <input type="text" name="resolution" required><br>
                
                <input type="hidden" name="artistid" id="hiddenartistid">
                <input type="hidden" name="artworkid" id="hiddenartworkid">
                
                <button type="submit">Add</button>
            </form>
        </div>
        
        <div class="index_grid_images">
            <div class="artist_view_artwork">
                Image:
            </div>
            <div class="artist_view_description">
                <p> Artwork ID:<br>
                    Artist ID:<br>
                    Image URL:<br>
                    Price:<br>
                    Description:<br>
                    Resolution:<br>
                </p>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
    <script type="text/javascript" src="scripts/imagedata.js"></script> 
    <script type="text/javascript" src="scripts/javascript.js"></script> 
        <script>
        let userdata = JSON.parse(localStorage.getItem('userdata'))
        document.getElementById('hiddenartistid').value = userdata.artistid
    </script>
</body>
</html>