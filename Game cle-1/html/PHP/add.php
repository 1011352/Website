<?php
$dbPassword = '';
$dbUserName = 'root';
$dbServer = 'localhost';
$dbName = 'ded';


// Create connection
$conn = mysqli_connect($dbServer, $dbUserName, $dbPassword, $dbName);
// Check connection
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}

$username2 = mysqli_real_escape_string($conn, $_POST['uname2']);
$typeQuestion = mysqli_real_escape_string($conn, $_POST['tquestion']);
$question = mysqli_real_escape_string($conn, $_POST['question']);





?>