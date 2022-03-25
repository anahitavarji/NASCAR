<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Control Structures</title>
</head>

<body>

    <?php

    //If statements
    //Testing condition in parentheses if its true
    /*if (3 < 10) {
        echo "three is less than ten<br>";
    }
    //Doesn't execute not true
    //If it's not, that's a back up (else statement)
    //Truth not meant so doesn't execute and goes to else statement
    //Can also do (else if statement) to test another condition
    if (3 > 10) {
        echo "three is more than ten";
    } elseif (4 < 5) {
        echo "of course four is less than five";
    } else {
        echo "It is not!";
    }*/

    //Comparison
    /*if( 4 == 4) {
        echo "it is true";
    }
    if( 4 <= 4) {
        echo "it is true";
    }
    if( 4 != 4) {
        echo "it is true";
    }
    if( 4 != 5) {
        echo "it is true";
    }
    //String with four inside, the same
    if( 4 == "4") {
        echo "it is true";
    }
    //But not identical because its string and number
    if( 4 === "4") {
        echo "it is true";
    }*/

    //Logical
    //If four is identical to four or five is less than 10 execute
    //If first doesn't work then try next condition
    //OR
    /*if( 4 === "4" || 5 < 10) {
        echo "it is true";
    }
    //AND
    //Both conditions must be true in order to execute
    //Wont execute
    if( 4 === "4" && 5 < 10) {
        echo "it is true";
    }
    //Both true so executes
    if( 4 === 4 && 5 < 10) {
        echo "it is true";
    }*/

    //Switch statement
    // $number = 24;
    //Tests one single condition against multiple values
    //$number being tested against cases
    //Goes to next case if condition is not met
    //Stops when condition is met
    //Default if nothing is met
    /*switch ($number) {
        case 34:
            echo "it is 34";
            break;
            //to work properly you always need break
            //once it finds info needed, it stops
        case 37:
            echo "it is 37";
            break;
        case 35:
            echo "it is 35";
            break;
        case 24:
            echo "it is 24";
            break;
        default: 
            echo "we could not find anything!";
            break;
    }*/

    //Loops
    //Allows to repeat code until certain condition is met
    //Similar to if statements


    //While loop
    //while 4 is less than 10 to keep executing 4 < 10
    //but 4 is always less than 10 
    //Must create counter/intializer
    //As long is counter is less than 10 it executes then stops when 10 is met
    /*$counter = 0;
    while ($counter < 10) {
        echo "hello student<br>";
        $counter++;
        //Increment operator, also can be $counter = $counter + 1;
        //every time loop finishes, increases counter by 1
    }
    $counter = 0;
    while ($counter <= 10) {
        echo $counter;
        $counter++;
        //Increment operator, also can be $counter = $counter + 1;
        //every time loop finishes, increases counter by 1
    }*/

    //For loops
    //Create variable inside loop
    //Index, where we start the loop
    //we test the condition
    //Then increment
    /*for($counter=0; $counter < 10; $counter++){
        echo $counter . "<br>";
        //breaks into new line once number is printed

    }*/

    //For Each loop
    //works only with arrays
    //To go through every array and process their values
    //for each will go into array and assign a variable to each value
    /*$numbers = array(345, 346, 347, 676, 385, 444);
    foreach ($numbers as $number) {
        echo $number . "<br>";
    }*/

    //Practice Exercises
    //Step 1: Make an if statement with else if and else to finally display string saying, I love PHP
    /*if (3 > 4) {
        echo "Three is more than four!";
    } elseif (1 >= 4) {
        echo "One is more than four!";
    } else {
        echo "I love PHP!!!!!! =)<br>";
    }*/
    //Step 2: Make a forloop that displays 10 numbers
    /*for ($counter = 0; $counter <= 10; $counter++) {
        echo $counter;
    }*/
    //Step 3: Make a switch statement that test against one condition with 5 cases
    /*$number = 10;
    switch ($number) {
        case 54:
            echo "it's 54!";
            break;
        case 57:
            echo "it's 57!";
            break;
        case 59:
            echo "it's 59!";
            break;
        case 10:
            echo "<br>it's 10!";
            break;
        case 60:
            echo "it's 60!";
            break;
    }*/
    ?>

    <h1>Comparison Operators</h1>
<ul>
    <li>equal ==</li>
    <li>identical ===</li>
    <li>compare > < >= <= <></li>
    <li>not equal !==</li>
</ul>
<br>
<h1>Logical Operators</h1>
<ul>
    <li>And &&</li>
    <li>Or | |</li>
    <li>Not !</li>
</ul>

</body>

</html>