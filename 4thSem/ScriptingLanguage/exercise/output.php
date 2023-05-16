<?php
include "connect.php";
$sql = "SELECT * FROM tblStudent";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <a href="index.php" class="btn btn-primary text-white my-2">Add Student</a>
        <form action="">
            <input type="text" class="form-control" placeholder="Search...">

        </form>
        <div class="output mt-5">
            <h1>Output</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">CONTACT</th>
                        <th scope="col">FACULTY</th>
                    </tr>
                </thead>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['ID'];
                    $name = $row['NAME'];
                    $contact = $row['CONTACT'];
                    $faculty = $row['FACULTY'];

                ?>


                    <tbody>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $contact; ?></td>
                            <td><?php echo $faculty; ?></td>

                        </tr>
                    </tbody>



                <?php  }
                ?>

            </table>
        </div>
    </div>

</body>

</html>