<?php
    function isPalendrome($str){
        $str = strtolower($str);
        if ($str == strrev($str)){
            return true;
        }else{
            return false;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 6</title>
</head>
<body>
<h3>Write a PHP function that checks whether a passed string is a palindrome</h3>

<form action="" method="post">
        <label for="letter">Insert Text: </label>
        <input type="text" name="letter">
        <br>
        <input type="submit" name="submit">
    </form>

    <?php
    
    if(isset($_POST["letter"])){
        $letter = $_POST["letter"];
        if (isPalendrome($letter)){
            echo $letter." is in a Palindrome.";
        }else{
            echo $letter." is NOT in a Palindrome.";
        }
    }

    ?>
</body>
</html>