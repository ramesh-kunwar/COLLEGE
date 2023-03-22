<?php
// control statement
$flag = "texas";
$title = "";
$collegeName = "";
$location = "";
$contact = "";
$email = "";
if ($flag == "dav") {
    $collegeName = "DAV College";
    $email = "class@edu.com.np";
    $contact = 9844332233;
    $location = "Lalitpur, Nepal";

    $title = "Your are viewing profile of " . $collegeName;
}


if ($flag == "texas") {
    $collegeName = "Texas College";
    $email = "texas@edu.com.np";
    $contact = 980000112231;
    $location = "Kathmandu, Nepal";

    $title = "Your are viewing profile of " . $collegeName;
}

// if else if statement
$profileStatus = "bronze";
$star = "";
$starTitle = "";
if ($profileStatus == "gold") {
    $star = 5;
    $starTitle = "GOLD User";
} else if ($profileStatus == "bronze") {
    $star = 3.5;
    $starTitle = "BRONZE User";
} else if ($profileStatus == "silver") {
    $star = 2.5;
    $starTitle = "SILVER User";
} else {
    $star = 1;
    $starTitle = "BEGINNER User";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Viewer</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>

<body>
    <div class="content container my-5">
        <?php
        if ($flag == "dav") { ?>
            <div class="border p-4 my-2 shadow-sm rounded">
                <h1 class="text-"> <?php echo $title; ?> </h1>
                <h4>Location: <span class="lead  text-secondary"><?php echo $location ?></span> </h4>
                <h4>Contact: <span class="lead text-secondary"><?php echo $contact ?></span> </h4>
                <h4>Email: <span class="lead text-secondary"><?php echo $email ?></span></h4>
            </div>
        <?php

        } else {   ?>
            <div class="border p-4 my-2 shadow-sm rounded">
                <h1 class="text-"> <?php echo $title; ?> </h1>
                <h4>Location: <span class="lead text-secondary"><?php echo $location ?></span> </h4>
                <h4>Contact: <span class="lead text-secondary"><?php echo $contact ?></span> </h4>
                <h4>Email: <span class="lead text-secondary"><?php echo $email ?></span></h4>
            </div>
        <?php   }
        ?>
    </div>
</body>

</html>