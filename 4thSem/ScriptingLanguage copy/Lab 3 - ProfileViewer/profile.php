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

// switch case statement

$day = '';
$val = 4;
$date  = date("F Y h");

switch ($val) {
    case 1:
        $day = "Sunday";
        break;
    case 2:
        $day = "Monday";
        break;
    case 3:
        $day = "Tuesday";
        break;
    case 4:
        $day = "Wednesday";
        break;
    case 5:
        $day = "Thursday";
        break;

    case 6:
        $day = "Friday";
        break;
    case 7:
        $day = "Saturday";
        break;

    default:
        $day = "Invalid input";
        break;
}



// create variable is_followed
// set value is_followed to "followed
// if followed then set button with text unfollow otherwise set button text follow

$isFollowed = false;
$followText = "";
if ($isFollowed) {
    $followText = "Unfollow";
} else {
    $followText = "Follow";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Viewer</title>
    <link rel="icon" type="image/gif" href="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Sign-check-icon.png/640px-Sign-check-icon.png">
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
                <h4>Profile Star: <span class="lead text-secondary"><?php echo $starTitle; ?></span></h4>
                <h4>Rating: <span class="lead text-secondary"><?php echo $star; ?></span></h4>
                <h4>Date: <span class="lead text-sedondary"><?php echo $date; ?></span></h4>
                <h4>Day: <span class="lead text-secondary"><?php echo $day; ?></span></h4>
                <button class="btn btn-primary btn-block"><?php echo $followText; ?></button>

            </div>
        <?php

        } else {   ?>
            <div class="border p-4 my-2 shadow-sm rounded">
                <h1 class="text-"> <?php echo $title; ?> </h1>
                <h4>Location: <span class="lead text-secondary"><?php echo $location ?></span> </h4>
                <h4>Contact: <span class="lead text-secondary"><?php echo $contact ?></span> </h4>
                <h4>Email: <span class="lead text-secondary"><?php echo $email ?></span></h4>
                <h4>Profile Star: <span class="lead text-secondary"><?php echo $starTitle; ?></span></h4>
                <h4>Rating: <span class="lead text-secondary"><?php echo $star; ?></span></h4>
                <h4>Date: <span class="lead text-sedondary"><?php echo $date; ?></span></h4>

                <h4>Day: <span class="lead text-secondary"><?php echo $day; ?></span></h4>
                <button class="btn btn-primary btn-block"><?php echo $followText; ?></button>

            </div>
        <?php   }
        ?>
    </div>

</body>

</html>