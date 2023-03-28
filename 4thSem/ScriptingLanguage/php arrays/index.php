<?php

/**
 * 
 */


// Indexed Array
// 1. empty array
$data = array();
$data = [];

// 2. with data
$lakes = array("Phewa", "Rara", "Begnas", "Tilicho");
$sports = ["Futsal", "Volleyball", "Tennis", "Kabbadi", "Crickent"];

// associative array
// key value pair
// key must be unique and must follow rule of identifier
$studentDetails = array(
    "id" => 1,
    "name" => "Ramesh",
    "contact" => 98034634,
    "email" => "ramesh@gmail.com",
    "gender" => "male",
    "dob" => "2001-02-25",
    "address" => "Dhobighat"
);

// Multi-dimensional Array
$multiDimensionalArray = [[1, "Ramesh Kunwar", "Dhobighat", "DAV"], [2, "Nischal Shakya", "Jwalakhel"], [3, "Pramod Thapa", "Kalanki"]];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array In PHP</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <div class="container pt-5">
        <h1 class="display-1 text-center">Array In PHP</h1>
        <div class="card p-5">

            <h1 class="text-danger">1. Index Array</h1>

            <hr>
            <div class="row">
                <div class="col">
                    <h2>Lakes of Nepal</h2>
                    <?php
                    for ($i = 0; $i < 4; $i++) {  ?>
                        <p><?php echo $lakes[$i]; ?></p>
                    <?php  }
                    ?>

                </div>
                <div class="col">
                    <h2>Sports</h2>
                    <?php
                    for ($i = 0; $i < count($sports); $i++) {  ?>
                        <p><?php echo $sports[$i]; ?></p>
                    <?php  }
                    ?>
                </div>
            </div>
            <hr>

        </div>
        <!--  -->
        <div class="card p-5 mt-5">

            <h1 class="text-danger">2. Associative Array</h1>

            <hr>
            <h2>Student Details</h2>
            <p>
                <span class="fw-bold"> Id: </span> <?php echo $studentDetails['id']; ?>
            </p>
            <p>
                <span class="fw-bold"> Name: </span> <?php echo $studentDetails['name']; ?>
            </p>
            <p>
                <span class="fw-bold"> Contact: </span> <?php echo $studentDetails['contact']; ?>
            </p>
            <p>
                <span class="fw-bold"> Email: </span> <?php echo $studentDetails['email']; ?>
            </p>
            <p>
                <span class="fw-bold"> Address: </span> <?php echo $studentDetails['address']; ?>
            </p>

        </div>
        <div class="card p-5 mt-5">
            <h2 class="text-danger">3. Multi Dimensional Array</h2>
            <hr>
            <span>
                <?php
                for ($i = 0; $i < count($multiDimensionalArray); $i++) {
                    for ($j = 0; $j < count($multiDimensionalArray[$i]); $j++) {  ?>
                        <span class=""><?php echo $multiDimensionalArray[$i][$j]; ?></span>
                    <?php  } ?>
                    <hr>
                <?php }
                ?>
            </span>
        </div>
    </div>

</body>

</html>