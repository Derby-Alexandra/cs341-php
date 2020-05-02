
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alexandra Derby's CS341 Images | BYU-Idaho</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <?php include 'header.php';?>   
    </header>
    <div class="grid_for_images">
        <img src="homepageimages/image1-min.JPG" alt="blurry tree" class="grid_images">
        <img src="homepageimages/image2-min.JPG" alt="sky and clouds" class="grid_images">
        <img src="homepageimages/image3-min.JPG" alt="volcano" class="grid_images">
        <img src="homepageimages/image4-min.JPG" alt="mountain and mist" class="grid_images">
        <img src="homepageimages/image5-min.JPG" alt="open road" class="grid_images">
        <img src="homepageimages/homepageimage-min.jpg" alt="pretty clouds" class="grid_images">
        <img src="homepageimages/image7-min.JPG" alt="pink alley" class="grid_images">
        <img src="homepageimages/image8-min.JPG" alt="mountains and people" class="grid_images">
        <img src="homepageimages/image9-min.JPG" alt="snowy mountains" class="grid_images">
    </div>
        <div id="image_zoom" class="image_zoom">
            <div class="child_div_image">
                <div class="close_image" onclick="close_image()" id="close_image">X</div>
                <img id="zoom_style" class="zoom_style">
            </div>
        </div>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
    <script type="text/javascript" src="hpjavascript.js"></script> 
</body>
</html>

