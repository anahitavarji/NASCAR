<?php

// for ($row=1; $row<=5; $row++){
//     for ($star=5; $star>=$row; $star--){
//         echo"hi";
//     }
//     echo"<br>";
// }


//the number of stars keeps decreasing with each new line
//outer loop controls number of rows
//inner loop controls number of stars

//starts at 1
//see if condition is met, less than or equal to 5
//must run 5 times
//must create 5 rows
//condition is met, goes to inner loop
//inner loop starts at 5
//see if condition is met, more than or equal to number of row,
//condition is met
//prints star
//breaks off into next row to start loop again
//adds a row
//decrements a star

    $pattern ="*";
    $space = "<br>";
    for ($row=1; $row<=5; $row++) {
        for ($star=5; $star>=$row; $star--) {
            echo $pattern;
        }
        echo $space;
    }

    ?>