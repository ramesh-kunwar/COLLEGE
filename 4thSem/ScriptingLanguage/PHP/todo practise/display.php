<?php
include "connection.php";

$sql = "SELECT * FROM ccCountry";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <!-- <link rel="stylesheet" href="./bootstrap.min.css"> -->
    <style>
        a.add-country{
            padding: 1rem 2rem;
            margin: 1rem;
            background-color: blue;
            color: white;
            display: inline-block;
        }
    </style>
</head>

<body>
<a href="create.php" class="btn add-country btn-primary ">Add Country</a>
    <table border="1" style="border-collapse:collapse;">
        <!-- <table border='' > -->
        <tr>
            <th>Country Id</th>
            <th>Country Name</th>
            <th>Country Code</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['countryId'];
            $countryName = $row['countryName'];
            $countryCode = $row['countryCode'];
        ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $countryName; ?></td>
                <td><?php echo $countryCode; ?></td>

                <td><a href="edit.php?id=<?php echo $id; ?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $id; ?>">Delete</a></td>
            </tr>
        <?php   }
        ?>

    </table>

</body>

</html>