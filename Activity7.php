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
        <input type="date" name="birthday" value="<?php echo date('Y-m-d'); ?>">
        <br>
        <input type="submit" name="submit">
    </form>
<br>

<?php

if(isset($_POST["birthday"])){
    

    $birthday = $_POST["birthday"];

    $dateToday = date("Y-m-d");

    echo "Birthday: ". $birthday;
    echo "<br>";
    echo "Date Today: ".$dateToday;
    echo "<br>";
    
    $daysOfBday = idate("m",strtotime($birthday))*30 + idate("d",strtotime($birthday));

    $daysOfToday = idate("m",strtotime($dateToday))*30 + idate("d",strtotime($dateToday));

    if($daysOfBday > $daysOfToday){
        // echo "Birthday ".$daysOfBday. " > ". $daysOfToday . " Today  - True";
        // echo "<br>";
        echo "Days Left: ".( intval($daysOfBday) - intval($daysOfToday));

    }elseif($daysOfBday < $daysOfToday){
        // echo "Birthday ".$daysOfBday. " < ". $daysOfToday . " Today - False";
        // echo "<br>";
        echo "Days Left: ".( (intval($daysOfBday) + 365 ) - intval($daysOfToday));
    }else{
        // echo "Birthday ".$daysOfBday. " = ". $daysOfToday . " Today - Equal";
        // echo "<br>";
        echo "Happy Birthday!";
    }

}else{
    echo "Please Fill the Date";
}
?>


</body>
</html>