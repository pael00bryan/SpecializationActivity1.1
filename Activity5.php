<?php
function textIsLower($str){
    $str = $str;
    if (ctype_lower($str)){
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
    <title>Activity 5</title>
</head>
<body>
    <h3>Write a PHP function that checks whether a string is all lowercase.</h3>
    <br>
    <form action="" method="post">
        <label for="letter">Insert Text: </label>
        <input type="text" name="letter">
        <br>
        <input type="submit" name="submit">
    </form>

    <?php
    
    if(isset($_POST["letter"])){
        $letter = $_POST["letter"];
        if (textIsLower($letter)){
            echo $letter." is in a lowercase.";
        }else{
            echo $letter." is NOT in a lowercase.";
        }
    }

    ?>
</body>
</html>