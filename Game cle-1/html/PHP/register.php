<?php
require_once "config.php";
$email = $_POST['email'];
$username = $_POST['uname'];
$password = $_POST['password'];

//Prevent sql injections
    $username = stripcslashes($username);
    $password = stripcslashes(($password));
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);




$sql = "INSERT INTO accounts (email, username, password)
VALUES ('$email','$username','$password')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
