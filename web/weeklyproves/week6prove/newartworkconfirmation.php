<?php
// Start the session
session_start();
// START: code to display errors
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// END: code to display errors
include 'dbconnect.php';
$imageurl = $_POST['imageurl'];
$price = $_POST['price'];
$description = $_POST['description'];
$resolution = $_POST['resolution'];
$artistid = $_POST['artistid'];
$_SESSION['dbconnection']->query("INSERT INTO artwork (artistid, imageurl, price, description, resolution) VALUES ($artistid, '$imageurl', '$price', '$description', '$resolution')");
header("Location: artworkinformation.php?artistid=$artistid");
?>
<script>
document.getElementById('artworkadded').style.display = block;
</script>