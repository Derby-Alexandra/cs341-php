<?php
// Start the session
session_start();
// START: code to display errors
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);
// END: code to display errors
include 'dbconnect.php';
$artworkid = $_POST['artworkid'];
$artistid = $_POST['artistid'];
$_SESSION['dbconnection']->query("DELETE FROM artwork WHERE artworkid = $artworkid");
header("Location: artworkinformation.php?artistid=$artistid");
?>
