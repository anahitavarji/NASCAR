<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Greatest Number Value of 3</title>
</head>
<body>
Write a program to find greatest of 3 numbers
<br>
    <?php

    $a = 1;
    $b = 2;
    $c= 3;

    if($a>$b && $a>$c){
        echo $a . " is the biggest number! =)";
    } elseif ($b>$a && $b>$c) {
        echo $b . " is the biggest number! =)";
    } elseif ($c>$a && $c>$b){
        echo $c . " is the biggest number! =)";
    } else {
        echo "No number is the greatest..";
    }





    // $numbers = array(600,4,8);
    // echo max($numbers);
    //to find the max value of number in an array
    ?>
</body>
</html>