<?php
include "connection.php";
$id = $_GET['id'];
$sql = "SELECT * from ccCountry WHERE countryId='$id'";
$result = mysqli_query($conn, $sql);




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
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['countryId'];
        $countryName = $row['countryName'];
        $countryCode = $row['countryCode'];

        echo $id;
    ?>
        <form action="update.php" method="post">
            <div class="container mt-5">
                <h1>Edit Details</h1>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <label>Country Name</label>
                <input type="text" class="form-control" value="<?php echo $countryName ?>" name="countryName">
                <label>Country Code</label>
                <input type="text" class="form-control" name="countryCode" value="<?php echo $countryCode ?>">
                <input type="submit" value="Update" name="Update" class="mt-3 btn btn-primary  col-12">
            </div>

        </form>
    <?php
    }
    ?>
</body>

</html>