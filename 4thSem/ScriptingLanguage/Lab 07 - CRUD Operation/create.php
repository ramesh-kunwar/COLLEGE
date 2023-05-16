<?php
include "dbconfig.php";

if (isset($_POST['btnCreate'])) {
    $countryName = $_POST['countryName'];
    $countryCode = $_POST['countryCode'];

    // $sql = "INSERT INTO ccCountry(countryName, countryCode)
    //         VLAUES('$countryName', '$countryCode')
    //     ";
    $sql = "INSERT INTO ccCountry(countryName, countryCode)". 
            "VALUES ('$countryName', '$countryCode')";

        $result = mysqli_query($connect, $sql);

        if($result){
            echo "Data added succesfully";
        }else{
            echo "Some thing went wrong";

        }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country | CREATE</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="content">
        <h2>Add Country</h2>
        <hr>
        <a href="index.php">BACK</a>
        <form  method="post" class="container">
            <div class="form-input">
                <label for="country_name">Country Name: </label>
                <input type="text" name="countryName">
            </div>
            <div class="form-input">
                <label for="country_code">Country Code: </label>
                <input type="text" name="countryCode">
            </div>
            <input type="submit" name="btnCreate" value="Add Country">
        </form>
    </div>
</body>

</html>