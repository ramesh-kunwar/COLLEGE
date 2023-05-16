<!-- Write a php pprogram having a database connection. Create a php function to insert a student information in db -->
<?php



function insertData()
{

    $connection = mysqli_connect("localhost", "root", "", "student");


    if (!$connection) {
        echo "Not connected";
    }



    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    // inserting data in database
    $sql = "INSERT INTO studentTable (`Name`,`Address`,`Email`)
VALUES ('$name', '$address', '$email')
";
    $result = mysqli_query($connection, $sql);
    if (!$result) {
        echo "Data insertion failed";
    } else {
        echo "Data inserted";
    }
}


if (isset($_POST['addDetails'])) {
    insertData();
}





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h1>Prime or not</h1>

        <form action="studentDetails.php" method="POST">
            <input type="text" class="form-control" name="name" placeholder="Enter a name">
            <br>

            <input type="text" class="form-control" name="address" placeholder="Enter address">
            <br>

            <input type="email" class="form-control" name="email" placeholder="Enter a email">
            <br>

            <input type="submit" name="addDetails" class="btn btn-primary">
        </form>

    </div>
</body>

</html>