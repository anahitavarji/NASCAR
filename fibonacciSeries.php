<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fibonacci Series</title>
</head>

<body>
    Write a PHP program to print Fibonacci series
    <br>
    <br>
    <?php
    //For Loop Method
    
    //Variables
    $numSeries = 0;
    $fib1 = 1;
    $fib2 = 0;
    
    
    //For Loop
    //Intialize at 0
    //Condition met if more than or equal to 5
    //Continues until condition is met 
    for($i=0; $i<=5; $i++){
        //echo $numSeries = 0
        echo $numSeries. '<br />';
        //Prints the variable value, which contains the total fibonacci series number of previous two numbers
        $numSeries = $fib1 + $fib2;
        // 1 = 1 + 0
        //Adds two values in order to create the fibonacci series value
        $fib1 = $fib2;
        // $fib1 = 0
        //Assigns $fib2 value to $fib1 value
        $fib2 = $numSeries;
        //$fib2 = 1
        //Assigns $numSeries value to $fib2

        //echo $numSeries = 1 
        //Then, loops again with new values in place...
        //new addition values, 1 = 0 + 1
        //$fib1 = 1
        //$fib2 = 1

        //Loops again, echo $numSeries = 1
        //new addition values, 2 = 1 + 1
        //$fib1 = 1
        //$fib2 = 2

        //Loops again, echo $numSeries = 2
        //new addition values, 3 = 1 + 2
        //$fib1 = 2
        //$fib2 = 3

    }













    //Recursion Way
    //A way where we repeatedly call the same function until a base conditon is matched to end the recurision.
    /*function Fibonacci($number)
    {
        //if and else if to generate first two numbers
        if ($number == 0)
            return 0;
        else if ($number == 1)
            return 1;
        //recursive call to get upcoming numbers
        else
            return (Fibonacci($number - 1) + Fibonacci($number - 2));
    }

    //To show series
    $number = 10;
    for ($counter = 0; $counter < $number; $counter++) {
        echo Fibonacci(($counter), '');
    }
    */
    
    //Iterative Way



    ?>

</body>

</html>