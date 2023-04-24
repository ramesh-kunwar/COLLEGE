<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country | INDEX</title>
</head>

<body>
    <div class="content">
        <h2>Country List</h2>
        <hr>
        <a href="create.php">ADD Country</a>
        <table border="1">
            <thead>
                <th>S.No</th>
                <th>Name</th>
                <th>Code</th>
                <th colspan="3">Action</th>
            </thead>
            <tbody>

                <?php
                include "dbconfig.php";

                $sql = "SELECT * FROM ccCountry";

                $result = mysqli_query($connect, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $counter = 1;
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td> <?php echo $counter; ?> </td>
                            <td> <?php echo $row['countryId']; ?> </td>
                            <td> <?php echo $row['countryName']; ?> </td>
                            <td> <?php echo $row['countryCode']; ?> </td>

                            <td><a href="edit.php?id=<?php echo $row["countryId"]; ?>"> Edit </a></td>
                            <td><a href="view.php?id=<?php echo $row["countryId"]; ?>"> View </a></td>
                            <td><a href="delete.php?id=<?php echo $row["countryId"]; ?>"> Delete </a></td>


                        </tr>
                <?php
                        $counter++;
                    }
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>