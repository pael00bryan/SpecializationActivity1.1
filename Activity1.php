<?php
$username = $_POST["username"];

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 1</title>
</head>


<body>
    <h3> Create a simple HTML form and accept the user name and display the name through PHP echo statement.</h3>
    <br>
    <form action="" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username">
        <br>
        <input type="submit" name="submit">
    </form>

    <br>

    <?php
        if(isset($username)){
            echo $username;
        }
    ?>
</body>
</html>