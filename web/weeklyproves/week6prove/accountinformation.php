
<!DOCTYPE html>
<html lang="en-US">   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CS 341 | Alexandra Derby | BYU-Idaho</title>
    <meta name="description" content="Artist Account Information">
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
            Artist ID: <span id='artistid'></span><br>
            First Name: <span id='firstname'></span><br>
            Last Name: <span id='lastname'></span><br>
            Email: <span id='email'></span><br>
            Accumulated Sales: <span id='accumulatedsales'></span><br>
        </div>
        <div><br>
            <p>Update your password:</p>
            <form action="newpasswordconfirmation.php" method="POST">
                
                <label for="oldpassword">Old Password:</label>
                <input type="password" name="oldpassword" required><br>
                
                <label for="newpassword">New Password:</label>
                <input type="password" name="newpassword" required><br>
                
                <label for="newpassword2">Enter New Password Again:</label>
                <input type="password" name="newpassword2" required><br>
                
                <input type="hidden" name="artistid" id="hiddenartistid">
                
                <button type="submit">Update</button>
            </form>
        </div>
    </main>
    <footer>
        <p>&copy; 2020 | Alexandra Derby | Canada | <a href="http://www.byui.edu/online">BYU Idaho Online Learning</a></p>
    </footer>
    <script>
        document.getElementById('artistid').innerHTML = userdata.artistid
        document.getElementById('firstname').innerHTML = userdata.firstname
        document.getElementById('lastname').innerHTML = userdata.lastname
        document.getElementById('email').innerHTML = userdata.email
        document.getElementById('accumulatedsales').innerHTML = userdata.accumulatedsales
        document.getElementById('hiddenartistid').value = userdata.artistid
    </script>
    <script type="text/javascript" src="scripts/imagedata.js"></script> 
    <script type="text/javascript" src="scripts/javascript.js"></script> 
</body>
</html>