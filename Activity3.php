<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 3</title>
</head>
<body>
    <h3>Create a script to construct the following pattern, using a nested for loop.</h3>
    <br>

    <?php
        $subtract = 0;
        $interval = 2;
    
        for($i = 1; $i < 11; $i++){
            $str = "";
            $n = 0;
            if($subtract > 5){
                $n+= $interval;
                $interval += 2;
            }

            
            for(; $n < $i; $n++){
                echo $str . "*";
            }
            

            echo  "<br>";
            
            $subtract ++;

            
        }
    
    ?>
</body>
</html>