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
</body>
</html>