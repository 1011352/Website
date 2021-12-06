<!DOCTYPE html>
<html>
<head>
    <title>Display all accounts from Database</title>
</head>
<body>

<h2>accounts</h2>

<table border="2">
    <tr>
        <td>Sr.No.</td>
        <td>email</td>
        <td>username</td>
        <td>password</td>
    </tr>

    <?php

    include "config.php"; // Using database connection file here


    $records = mysqli_query($conn,"select * from accounts"); // fetch data from database

    while($data = mysqli_fetch_array($records))
    {
        ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['password']; ?>
            <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
        </tr>
        <?php
    }
    ?>
</table>

<?php mysqli_close($conn); // Close connection ?>

</body>
</html>

