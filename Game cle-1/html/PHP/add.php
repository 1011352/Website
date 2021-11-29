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

$username2 = $_POST['uname2'];
$typeQuestion = $_POST['tquestion'];
$question = $_POST['question'];





?>