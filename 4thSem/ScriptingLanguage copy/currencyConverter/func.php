<?php
if (isset($_POST["convert"])) {
    $amount = $_POST['amount'];
    $country = $_POST["country"];
    $convertedAmount = "";
    $errorMessage = "";

    if ($amount == "") {
        $errorMessage =  "Please enter amount first";
    } else {
        switch ($country) {
            case 1:
                $convertedAmount = 93 * $amount;
                break;
            case 2:
                $convertedAmount = 1.6 * $amount;
                break;
            case 3:
                $convertedAmount = 129 * $amount;
                break;
            case 4:
                $convertedAmount = 164 * $amount;
                break;
            case 5:
                $convertedAmount = 0.99 * $amount;
                break;

            default:
                $convertedAmount = 1 * $amount;
        }
        // $errorMessage = "Empty amount field. Please enter amount first";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Result</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card p-5">
            <?php if ($errorMessage != "") { ?>
                <div class="alert alert-danger">
                    <?php echo $errorMessage; ?>
                    <a href="./index.php" class="btn btn-primary col-12 mt-5">Back</a>
                </div>

            <?php } ?>

            <?php if ($convertedAmount != "") { ?>
                <div class="alert alert-success">
                    Your Amount is Rs. <?php echo $convertedAmount; ?>
                </div>

            <?php } ?>

        </div>
    </div>
</body>

</html>