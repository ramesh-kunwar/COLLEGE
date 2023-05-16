<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country | EDIT</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="content">
        <h2>Update Country</h2>
        <hr>
        <a href="index.php">BACK</a>

        <?php
        include "dbconfig.php";
        $id = $_GET['id'];
        $sql = "SELECT * FROM ccCountry WHERE countryId=" . $id;
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <!-- echo $row["countryName"]; -->

                <form action="update.php" method="POST" class="container">
                    <input type="hidden" name="countryId" value="<?php echo $row['countryId']; ?>">
                    <div class="form-input">
                        <label for="country_name">Country Name: </label>
                        <input type="text" name="countryCode" value="<?php echo $row['countryName']; ?>">
                    </div>
                    <div class="form-input">
                        <label for="country_code">Country Code: </label>
                        <input type="text" name="countryCode" value="<?php echo $row['countryCode']; ?>">
                    </div>
                    <input type="submit" name="btnUpdate" value="UPDATE">
                </form>
        <?php }
        }

        ?>


    </div>
</body>

</html>