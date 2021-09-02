<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 8</title>
</head>
<body>
    <h3>Write a PHP script to calculate the difference between two dates.</h3>
<br>

<form action="" method="post">
        <label for="date1">Date 1: </label>
        <input type="date" name="date1">
        <br>
        <label for="date2">Date 2: </label>
        <input type="date" name="date2">
        <br>
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST["date1"]) && isset($_POST["date2"])){

            $datetime1 = new DateTime($_POST["date1"]);
            $datetime2 = new DateTime($_POST["date2"]);

            $difference = $datetime1->diff($datetime2);

            echo 'Difference: '.$difference->y.' years, ' .$difference->m.' months, ' .$difference->d.' days';
            echo "<br>";

        }else{
            echo "Please Fill the Dates";
        }
    
    ?>
    
</body>
</html>