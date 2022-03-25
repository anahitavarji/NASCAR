<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Built-in Functions Udemy</title>
</head>

<body>
    <?php

    //Built in functions are already created by PHP for usage

    //Math Functions

    echo pow(2, 7);
    //exponent
    echo "<br>";

    echo rand(1, 1000);
    //random number generator
    echo "<br>";

    echo sqrt(100);
    //the square root
    echo "<br>";

    echo ceil(4.6);
    //round to the next integer
    echo "<br>";

    echo floor(4.6);
    //round down the integer
    echo "<br>";

    echo round(4.5);
    echo"<br>";

    //String Functions

    $string="Hello Student do you like the class?";

    echo strlen($string);
    //length of string including spacing
    echo"<br>";

    echo strtoupper($string);
    //uppercase all letters
    echo"<br>";

    echo strtolower($string);
    //lowercase all letters
    echo"<br>";

    //Array Functions

    $list = [343,34,323,23,54,232,453];
    echo max($list);
    //show max value from array
    echo"<br>";

    echo min($list);
    //show min value from array
    echo"<br>";

    sort($list);
    //sort list from lowest to highest
    print_r($list);
    //prints whole array
    echo"<br>";


    //Practice Problems

    //Step1: Use a pre-built math funciton here and echo it
    echo rand(1,1000);

    echo sqrt(49);
    echo"<br>";

    //Step2: Use a pre-built string function here and echo it anything
    $string1="alkdjfijwoiejiroe";
    $valueLength = strlen($string1);
    echo $valueLength . "<br>";

    echo strtoupper("How are you doing today?");
    echo"<br>";

    //Step3: Use a pre-built array function here and echo it
    $values=['hi', 1222, "bye", 434324, $string1];
    $found = in_array($string1, $values);
    if ($found){
        echo "Wow, we did it together!";
    } else {
        echo "We messed up..we could not find it";
    }

    echo"<br>";

    $fruits=["apples", "lemons", "grapes"];
    print_r($fruits);









    ?>

</body>

</html>