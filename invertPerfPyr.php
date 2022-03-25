<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inverted Perfect Pyramid</title>
</head>

<body>
    <?php
    //Outloop prints $rows of pattern
    //Checks if condition is true, if met, goes to first inner loop
    //First inner loop deals with indentation 
    //checks if less than or equal to $row
    //if met, echoes indent then adds one and
    for ($row = 0; $row < 5; $row++) {
        for ($indent = 0; $indent <= $row; $indent++) {
            echo "&nbsp;";
        }
        for ($star = 5; $star > $row; $star--) {
            echo " * ";
        }
        echo "<br>";
    }
    ?>
</body>

</html>