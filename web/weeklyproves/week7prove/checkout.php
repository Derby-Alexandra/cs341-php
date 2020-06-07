
<!DOCTYPE html>
<html lang="en-US">   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CS 341 | Alexandra Derby | BYU-Idaho</title>
    <meta name="description" content="Checkout Page">
    <!-- <script type="text/javascript" src=""></script> -->
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <?php include 'header.php';?>
    </header>
    <main>
        <form method="POST" action="confirmation.php">

            <label for="address">Street Address:</label><br>
            <input type="text" id="address" name="address" required><br>

            <label for="city">City:</label><br>
            <input type="text" id="city" name="city" required><br>

            <label for="province">State/Province:</label><br>
            <input type="text" id="province" name="province" required><br>

            <label for="country">Country:</label><br>
            <input type="text" id="country" name="country" required><br><br>

            <button type="submit">Confirm Payment</button>
        </form>  
    </main>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
    <script type="text/javascript" src="scripts/imagedata.js"></script>

</body>
</html>