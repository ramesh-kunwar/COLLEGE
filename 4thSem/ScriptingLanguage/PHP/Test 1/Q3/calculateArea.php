<?php

function calculateArea()
{
    $radius = $_POST['radius'];
    $pi = 22 / 7;
    $area = $pi * $radius * $radius;
    echo "Area of a cirle is " . $area;
}

if (isset($_POST['calculateArea'])) {
    calculateArea();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap.min.css">

</head>

<body>

    <div class="container">
        <h1>Calculate Area </h1>
        <form action="calculateArea.php" method="POST">
            <input type="number" name="radius" class="form-control" placeholder="Enter radius">
            <br>
            <input type="submit" name="calculateArea" class="form-contrl">
        </form>
    </div>

</body>

</html>