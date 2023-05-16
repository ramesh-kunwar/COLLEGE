<?php
$userData = [
    "accNo" => "12345",
    "balance" => 20000,
    "pincode" => 1234,
];


if (isset($_POST["check"])) {


    $pin = $_POST["pincode"];
    $amount = $_POST["amount"];
    $accountNumber = $_POST["accountNumber"];

    if ($pin == $userData["pincode"] && $accountNumber == $userData["accNo"]) {
        if ($amount < $userData["balance"]) {
            echo "<p class='bg-success container p-3'> You are able to withdraw the amount </p>";
            echo $balance = $userData['balance'] - $amount;
            echo "<p class='bg-primary container p-3'> Your balance is   </p> " . $userData['balance'];
        } else {
            echo "<p class='bg-danger container p-3'>You do not have suffecient balance</p>";
        }
    } else {
        echo "<p class='bg-danger container p-3'>Pincode or Account no doesn't match</p>";
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Calculator</title>
    <link rel="stylesheet" href="./css//bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h1>Expense Calculator</h1>

        <form action="" method="POST" class=" mt-5 p-5 card">
            <label>Pincode:</label>
            <input type="number" class="form-control" name="pincode">
            <label for="" class="mt-2">Amount</label>
            <input type="number" class="form-control" name="amount">
            <label for="" class="mt-2">Account No:</label>
            <input type="text" class="form-control" name="accountNumber">
            <br>
           
            <input type="submit" value="Check" class="btn btn-primary" name="check">



        </form>

    </div>

</body>

</html>