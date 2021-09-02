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
    $interval = 10;
    $ast = 1;
    for ($i = 2; $i > 0; $i--){
        for($n = 1;$n < 6; $n++, $ast++, $interval--){
            if($ast < 6){
                 echo str_repeat("*",$ast)."<br>";
            }else{
                echo str_repeat("*",$interval)."<br>";
            }
          
        }
        
    }
    
    ?>
</body>
</html>