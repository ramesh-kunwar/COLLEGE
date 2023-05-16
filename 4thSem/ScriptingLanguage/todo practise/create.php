<?php


include "connection.php";

$countryName = $_POST['countryName'];
$countryCode = $_POST['countryCode'];

if (isset($_POST['Add'])) {
    echo $countryName;
    echo "<br>";
    echo $countryCode;

    $sql = "INSERT INTO ccCountry (countryName, countryCode)
    VALUES('$countryName', '$countryCode')
    ";

    $result  = mysqli_query($conn, $sql);

    if($result){
        header("location: display.php");
    }

}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>

<body>
    <form action="" method="post">
        <div class="container mt-5">
            <h1>Add Details</h1>
            <label>Country Name</label>
            <input type="text" class="form-control" name="countryName">
            <label>Country Code</label>
            <input type="text" class="form-control" name="countryCode">
            <input type="submit" value="Add" name="Add" class="mt-3 btn btn-primary  col-12">
        </div>
    </form>
</body>

</html>