<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise of PHP Include</title>
</head>
<body>
    <h1>Practice for doing PHP Include statement</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto dolores, amet dicta, odio tenetur quae hic harum numquam eum laboriosam officia porro recusandae blanditiis vitae iste explicabo? Quod, unde deleniti.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ab cum eveniet ex et, qui corrupti minus enim, nostrum officiis quidem hic unde, nemo deserunt. Voluptatum unde dolor voluptatibus. Voluptatibus.</p>
    <?php include 'anahitaVariables.php'; echo $fruit . " is my favorite. The color is " . $color;?>
    <br>
    <?php echo readfile("someText.txt");?>
    <!-- Reads a file and writes output -->
    <?php include 'anahitaList.php';?>
    <?php include 'anahitaFooter.php';?>
</body>
</html>