<?php

function ConvertToRoman($num){ 
    $n = intval($num); 
    $res = ''; 

    //array of roman numbers
    $romanNumber_Array = array( 
        'M'  => 1000, 
        'CM' => 900, 
        'D'  => 500, 
        'CD' => 400, 
        'C'  => 100, 
        'XC' => 90, 
        'L'  => 50, 
        'XL' => 40, 
        'X'  => 10, 
        'IX' => 9, 
        'V'  => 5, 
        'IV' => 4, 
        'I'  => 1); 

    foreach ($romanNumber_Array as $roman => $number){ 

        $matches = intval($n / $number); 

        $res .= str_repeat($roman, $matches); 

        $n = $n % $number; 
    } 

    return $res; 
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 9</title>
</head>
<body>
    <h3>Write a PHP function to convert Arabic Numbers to Roman Numerals.</h3>
    <br>
    <form action="" method="post">
        <label for="inputNum">Number: </label>
        <input type="number" name="inputNum">
        <br>
        <input type="submit" name="submit">
    </form>
    <br>
    <?php
        if(isset($_POST["inputNum"])){

            echo "Roman Value: ". ConvertToRoman($_POST["inputNum"]);
        }

    ?>
    
</body>
</html>