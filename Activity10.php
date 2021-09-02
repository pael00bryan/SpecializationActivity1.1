<?php
    function bubble_sort($num1, $num2, $num3 , $num4, $num5, $num6, $num7, $num8, $num9, $num10){
        // $num1 = $num1;
        // $num2 = $num2;
        // $num3 = $num3;
        // $num4 = $num4;
        // $num5 = $num5;
        // $num6 = $num6;
        // $num7 = $num7;
        // $num8 = $num8;
        // $num9 = $num9;
        // $num10 = $num10;

        $numArray = array($num1, $num2, $num3 , $num4, $num5, $num6, $num7, $num8, $num9, $num10);

        $interval = 0;
        for($i = 0; $i < 10; $i++){
            for($n = 0; $n < 10; $n++){
                if ($numArray[$i] < $numArray[$n]){
                    $numArray[$n] +=  $numArray[$i];
                    $numArray[$i] = $numArray[$n] - $numArray[$i] ;
                    $numArray[$n] = $numArray[$n] - $numArray[$i];
                }

            }
        }

        return $numArray;
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 10</title>
</head>
<body>
<h3>Write a PHP program to sort a list of elements using Bubble sort</h3>
<br>
    <form action="" method="post">
        <label for="num1">Number 1: </label>
        <input type="number" name="num1" value="0">
        <br>
        <label for="num2">Number 2: </label>
        <input type="number" name="num2"  value="0">
        <br>
        <label for="num3">Number 3: </label>
        <input type="number" name="num3"  value="0">
        <br>
        <label for="num4">Number 4: </label>
        <input type="number" name="num4"  value="0">
        <br>
        <label for="num5">Number 5: </label>
        <input type="number" name="num5"  value="0">
        <br>
        <label for="num6">Number 6: </label>
        <input type="number" name="num6"  value="0">
        <br>
        <label for="num7">Number 7: </label>
        <input type="number" name="num7"  value="0">
        <br>
        <label for="num8">Number 8: </label>
        <input type="number" name="num8"  value="0">
        <br>
        <label for="num9">Number 9: </label>
        <input type="number" name="num9"  value="0">
        <br>
        <label for="num10">Number 10: </label>
        <input type="number" name="num10"  value="0">
        <br>
        <input type="submit" name="submit">
    </form>
    <br>

    <?php
        $num1; $num2; $num3 ; $num4; $num5; $num6; $num7; $num8; $num9; $num10;

        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        $num4 = $_POST["num4"];
        $num5 = $_POST["num5"];
        $num6 = $_POST["num6"];
        $num7 = $_POST["num7"];
        $num8 = $_POST["num8"];
        $num9 = $_POST["num9"];
        $num10 = $_POST["num10"];
        if(isset($num1) && isset($num2) && isset($num3) && isset($num4) && isset($num5) && isset($num6) && isset($num7) && isset($num8) &&isset($num9) &&isset($num10)){

        echo "Your Input: ".$num1." ".$num2." ".$num3." ".$num4." ".$num5." ".$num6." ".$num7." ".$num8." ".$num9." ".$num10;
        echo "<br>";
        $finalArray = bubble_sort($num1, $num2, $num3 , $num4, $num5, $num6, $num7, $num8, $num9, $num10);
        echo "Bubble Sort: ";
        for($i = 0; $i < 10; $i++){
            echo $finalArray[$i]." ";
        }


        }

?>
</body>
</html>