<?php

$x = 0;
$y = 0;
$color = "";

$validated = false;

$errors = "";


if (isset($_POST['submit'])) {
    

    //data validation

    //getting the input
    $x_temp = htmlspecialchars($_POST['x']);
    $y_temp = htmlspecialchars($_POST['y']);
    $color_temp=htmlspecialchars( $_POST['clr']);
   
    if (!is_numeric($x_temp)) {
        echo var_export($x_temp, true) . " please enter a number", PHP_EOL;
    }
    if (!is_numeric($y_temp)) {
        echo var_export($y_temp, true) . " please enter a number", PHP_EOL;
    }
    
    switch ($color_temp) {
        case 'red':
        case 'blue':
        case'green':
        case'yellow':
            $color = $color_temp;
            break;
        default:
            echo "error your must choose a correct color";
    }
    if($x_temp <=0){
        echo'please enter number more than zero', PHP_EOL;
    }
    if($y_temp <=0){
        echo'please enter number more than zero', PHP_EOL;
    }
    if($x_temp >=50){
        echo'please enter number less than 50', PHP_EOL;
    }
    if($y_temp >=50){
        echo'please enter number less than 50', PHP_EOL;
    }
     $x = $x_temp;
     $y=$y_temp;
     $color=$color_temp;

}
    $validated = true; 
    

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> intro stage Kristina</title>
        <link rel="stylesheet" href="public/css/style.css">
    </head>
    <body>
    
       <?php
       //this is my business logic
       if (isset($_POST['submit'])) {
    
           
           for ($i = 0; $i < $y; $i++) {
            for ($j = 0; $j < $x; $j++) {
                echo "<div class='square' style='background-color:" . $color . "'></div>";
            }
            echo "<br>"; //this makes a new line
        }
    }
   
        ?>

        <form method="POST">
            X: <input type ="number" name="x" value="" >
            Y: <input type ="number" name="y" value="">
            Color: <select name="clr" size=1 >
            <option value="red"> red </option>
            <option value="green">green </option>
            <option value="blue"> blue </option>
            <option value="yellow"> yellow </option>
            <input type="submit" name="submit" value="GO!">       
        </form>
        
    </body>
</html>
