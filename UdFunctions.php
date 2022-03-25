<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udemy PHP Functions Practice</title>
</head>

<body>

    <?php
    //Defining Functions

    /*function init()
    {
        say_something();
        echo"<br>";
        calculate();
    }
    function calculate()
    {
        echo 456 + 345;
    }
    function say_something()
    {
        echo "Hello Student, do you like the class? yes? okay great";
    }
    init();*/


    //Defining Parameters
    //create variable to use in function

    /*function greeting($message)
    {
        echo $message;
    }
    greeting("Hi Customer how are you?");*/

use function ezsql\functions\lt;

function calculate($number1, $number2)
    {
        $sum = $number1 + $number2;
        echo $sum;
    }
    // calculate(48, 480);
    

    //Returning Values From Functions

    function addNumber($number1, $number2){
        // $sum = $number1 + $number2;
        // return $sum;
    }
    // $result = addNumber(34, 64);
    // echo $result;
    // echo "<br>";
    // $result = addNumber(100, $result);
    // echo $result;
    // echo "<br>";
    // $result = addNumber(300, $result);
    // echo $result;


    //PHP Scope
    // $x = "Outside"; //global (outside the function)

    // function convert(){
    //     global $x;
    //     $x = "Inside"; //local (inside the function)
    // }
    // echo $x;
    // echo"<br>";
    // convert();


    //PHP Constants
    // $number = 10;
    // echo $number . "<br>";

    // define("NAME", 1000);
    // echo NAME;


    //Practice Problems

    //Step 1: Define a function and make it return a calculation of 2 numbers
    function calculation(){
        $number1= 20;
        $number2= 50;
        $sum = $number1 + $number2;
        return $sum;
    }
    $theSum = calculation();
    echo $theSum. "<br>";

    //Step 2: Make a function that passes parameters and call it using parameter values
    function sayHey($hello){
        echo $hello;

    }
    sayHey('Hey is that Spanish?')

    ?>

</body>

</html>