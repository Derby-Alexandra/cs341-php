<?php
include 'dbconnect.php';
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$newpassword2 = $_POST['newpassword2'];
$artistid = $_POST['artistid'];
$databasepasswordrow = $_SESSION['dbconnection']->query("SELECT password FROM artist_account WHERE artist_id = '$artistid'");
    foreach($databasepasswordrow as $result) {
        $databasepassword = $result['password'];
    }
?>