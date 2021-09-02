<?php
    function isPrime($n){
        if ($n <= 1){
            return false;
        }
     
        for ($i = 2; $i < $n; $i++){
            if ($n % $i == 0){
                return false;
            }
        }
        return true;
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 4</title>
</head>
<body>
    <h3>Write a function to check whether a number is prime or not.</h3>
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
        $num = $_POST["inputNum"];
        $result = isPrime($num);
        if($result){
            echo $num ." is a Prime Number.";
        }else{
            echo $num ." is NOT a Prime Number.";
        }
    } else{
        echo "No Entry!";
    }

    ?>

</body>
</html>