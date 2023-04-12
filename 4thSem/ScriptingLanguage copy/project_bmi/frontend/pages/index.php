<?php

$title = "Lab One - Introduction to PHP";
$stepOne = "Installation process";
$composerStep = "Composer Installation Process";
$xamppStep = "XAMPP Installation Process";

$installationLink = "https://apple.com";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>

    <h1>
        <?php
        echo $title;
        ?>
    </h1>


    <h2>
        <?php
        echo $stepOne;
        ?>
    </h2>

    <h3>
        <?php
        echo $composerStep;
        ?>
    </h3>

    <h3>
        <?php
        echo $xamppStep;
        ?>
    </h3>

    <a href="<?php echo $installationLink;  ?>" target="_blank">Download Here</a>





</body>

</html>