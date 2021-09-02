<?php

$num1 = 0;
$num2 = 0;
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2</title>
</head>


<body>
    <h3>Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum.</h3>
    <br>
    <form action="" method="post">
        <label for="num1">Input 1st Number: </label>
        <input type="number" name="num1" value="0">
        <br>
        <label for="num1">Input 2nd Number: </label>
        <input type="number" name="num2" value="0">
        <br>
        <input type="submit" name="submit">
    </form>

    <br>

    <?php
        if(isset($_POST["num1"])){
            $num1 = $_POST["num1"];
        }
        if(isset($_POST["num2"]) ){
            $num2 = $_POST["num2"];
        }

        if($num1 == $num2){
            echo ($num1 + $num2)*3;
        }
        else{
            echo $num1 + $num2;
        }
    ?>
</body>
</html>