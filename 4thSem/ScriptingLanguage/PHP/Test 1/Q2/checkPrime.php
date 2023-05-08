<?php

if (isset($_POST['checkPrime'])) {

    $number = $_POST['number'];

    $temp = 0;

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $temp++;
        }
    }

    if ($temp == 0) {
        echo "Number is prime";
    } else {
        echo "not prime";
    }
    // echo $number;
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
        <h1>Prime or not</h1>

        <form action="checkPrime.php" method="POST">
            <input type="number" class="form-control" name="number" placeholder="Enter a number">
            <br>
            <input type="submit" name="checkPrime" class="btn btn-primary">
        </form>

    </div>
</body>

</html>