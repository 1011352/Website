<?php
$dbPassword = '';
$dbUserName = 'root';
$dbServer = 'localhost';
$dbName = 'ded';
$email = $_POST['email'];
$username = $_POST['uname'];
$password = $_POST['password'];
$username2 = $_POST['uname2'];
$typeQuestion = $_POST['tquestion'];
$question = $_POST['question'];


if (!empty($email) || !empty($username) || !empty($password) || !empty($username2)
    || !empty($typeQuestion) || !empty($question)){
    #code
}else{
    echo "All fields are required";
    die();
}

$query = "INSERT INTO accounts (email, username, password) 
VALUES ($email, $username, $password)";

$query = "INSERT INTO faq (username2, typeQuestion, question) 
VALUES ($username2, $typeQuestion, $question)";