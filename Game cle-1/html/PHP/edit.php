<?php
include "config.php";

$id = $_GET['id'];

$qry = mysqli_query($conn,"select * from accounts where id='$id'");

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $edit = mysqli_query($conn,"update accounts set email = '$email' username= '$username', password= '$password' where id='$id'");

    if($edit)
    {
        mysqli_close($conn);
        header("location:admin.php"); // redirects to all admin page
        exit;
    }

}
?>

<h3>Update Data</h3>

<form method="POST">
    <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Enter Full Name" Required>
    <input type="text" name="username" value="<?php echo $data['username'] ?>" placeholder="Enter Username" Required>
    <input type="text" name="password" value="<?php echo $data['password'] ?>" placeholder="Enter Password" Required>
    <input type="submit" name="update" value="update">
</form>