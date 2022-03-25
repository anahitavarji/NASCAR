<?php

//  for ($row = 1; $row <= 5; $row++)
// {
//     echo $row. "<br>";
// }

// $row=0;
// $star=0;
// while($row <5){
//   while($star <5) {
//     echo "*";
//     $row++;
//   }
//   echo"<br>";
//   $star++;
// }

// for ($row=0; $row<=5; $row++){
//   for ($star=0; $star<=$row; $star++) {
//     echo $star;
//   }
//   echo "<br>";
// }


 //outer loop
 //prints the individual rows
 //start at zero
 //i less than/ equal to 4 because we are are going from 0-4
 //4 iterations
 //after every iteration, add 1 to whatever "i" is
 //

//Star echos itself down a column of 5
//Intailize value at 0
//Continue the loop as long as $x is less than or equal to 4
//Increase loop counter by 1 when procedure is repeated
//The outer loop is always concerned with the number of lines.
//The inner loop is always concerned with the number of elements in each line.

//row starts at 1 (loop counter)
//so row 1 selected
//will run 5 times causing 5 rows
//checks if condition is less than 5, if yes, goes to inner loop 
//inner loop counter is less than or equal to outer loop counter
//inner loop starts as same as row value
//prints star of row value
//increase loop counter by one if condition is met
//exits loop and starts again
//star pattern are dependent on row variable
//once condition is met loop stops

$pattern= "*";
$space= "<br>";
for ($row=1; $row<=5; $row++){
  for ($star=1; $star<=$row; $star++) {
    echo $pattern;
  }
  echo $space;
}
