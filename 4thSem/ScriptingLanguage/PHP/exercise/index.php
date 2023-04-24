<?php
include "connect.php";

$name = $_POST['name'];
$contact = $_POST['contact'];
$faculty = $_POST['faculty'];

if (isset($_POST['submit'])) {

    // insert data
    $sql = "INSERT INTO tblStudent (NAME, CONTACT, FACULTY)
    VALUES ('$name', '$contact', '$faculty')
    ";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "data insertion success";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Student Details</h1>
        <form action="" method="post" class="mt-3">

            <label for="">Name</label>
            <input type="text" class="form-control" name="name">


            <label for="">Contact</label>
            <input type="text" class="form-control" name="contact">


            <label for="">Faculty</label>
            <input type="text" class="form-control" name="faculty">



            <input type="submit" name="submit" class="mt-3 btn btn-primary col-12">
    <a href="output.php" class="btn btn-warning mt-3 col-12">View List</a>

        </form>
    </div>

</body>

</html>