<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 7</title>
</head>
<body>
    
<form action="" method="post">
        <label for="birthday">Birthday: </label>
        <input type="date" name="birthday">
        <br>
        <input type="submit" name="submit">
    </form>
<br>

<?php

if(isset($_POST["birthday"])){

    $datetime1 = new DateTime($_POST["birthday"]);
    $datetime2 = new DateTime(date("m-d-Y"));

    $difference = $datetime1->diff($datetime2);

    echo 'Difference: '.$difference->y.' years, ' .$difference->m.' months, ' .$difference->d.' days';
    echo "<br>";

}else{
    echo "Please Fill the Date";
}
?>


</body>
</html>