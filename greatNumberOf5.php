<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Greatest Value of 5</title>
</head>

<body>
    Write a PHP program to find greatest of 5 numbers
    <br>
    <br>

    <?php
    $a = 1;
    $b = 2;
    $c = 3;
    $d = 4;
    $e = 5;

    if ($a > $b && $a > $c && $a > $d && $a > $e) {
        echo $a . " is the biggest number! =)";
    } elseif ($b > $a && $b > $c && $b > $d && $b > $e) {
        echo $b . " is the biggest number! =)";
    } elseif ($c > $a && $c > $b && $c > $d && $c > $e) {
        echo $c . " is the biggest number! =)";
    } elseif ($d > $a && $d > $b && $d > $c && $d > $e) {
        echo $d . " is the biggest number! =)";
    } elseif ($e > $a && $e > $b && $e > $c && $e > $d) {
        echo $e . " is the biggest number! =)";
    } else {
        echo "No number is the greatest..";
    }

    // echo "<br />";
    // $numbers = array(400, 3, 2, 8, 10, 9);
    // echo max($numbers);
    //to find the max value in an array

    // echo "<br />";
    // echo max(4, 20, 300, 1, 2);


    ?>

</body>

</html>