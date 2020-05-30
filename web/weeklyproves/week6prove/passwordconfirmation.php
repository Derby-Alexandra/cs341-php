<?php
// Start the session
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include 'dbconnect.php';
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$newpassword2 = $_POST['newpassword2'];
$artistid = $_POST['artistid'];
var_dump($oldpassword);
var_dump($newpassword);
var_dump($newpassword2);
var_dump($artistid);
$databasepasswordrow = $_SESSION['dbconnection']->query("SELECT password FROM artist_account WHERE artist_id = '$artistid'");
    foreach($databasepasswordrow as $result) {
        $databasepassword = $result['password']
    }
?>