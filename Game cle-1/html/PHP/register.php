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
$email = $_POST['email'];
$username = $_POST['uname'];
$password = $_POST['password'];


$sql = "INSERT INTO accounts (email, username, password)
VALUES ($email,$username,$password)";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
