<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Perfect Pyramid</title>
</head>

<body>
    <?php
    // for($i=0; $i <4; $i++){
    //     for ($a=0; $a<=$i; $a++){
    //         for ($b=0; $b<=$a; $b++){
    //             echo "<br>";
    //         }
    //         echo "*";
    //     }
    //     echo "*";
    // }

    //&nbsp; non-breaking space prevents line breaks, adds visible space
    //Outer loop will execute first
    //Outer loop will check if condition is met (less than or equal to 4)
    //If true, then whole loop body executes
    //Goes to first inner loop
    //Checks if condition is met (if $indent is less than $row minus five)
    //$row minus five is three
    //$indent is less than three so it executes the echo statement "adds space"
    //$indent goes up by one
    //$indent goes through condition again
    //$indent condition is met (2 < 3)
    //$indent executes echo statement
    //when condition is not met
    //goes to second inner loop
    //Checks if condition is met (if $star is less than $row [0<1])
    //Executes the echo statement "*"
    //$star goes up by one
    //$star goes through condition again
    //condition is not met (1<1) false
    //exits loops but executes echo statement in outer loop
    //starts from outer loop and goes through inner loops again until outer loop condition is met

    for ($row = 1; $row < 10; $row++) {
        for ($indent = 1; $indent < 10 - $row; $indent++) {
            echo "&nbsp;";
        }
        for ($star = 0; $star < $row; $star++) {
            echo " * ";
        }
        echo "<br>";
    }

    // echo "<pre>";
    // $space = 5;
    // for ($i = 0; $i <= 5; $i++) {

    //     for ($k = 0; $k < $space; $k++) {
    //         echo "&nbsp;";
    //     }
    //     for ($j = 0; $j < 2 * $i - 1; $j++) {
    //         echo "*";
    //     }

    //     $space--;
    //     echo "<br/>";
    // }
    // echo "</pre>";


    ?>
</body>

</html>