<?php
$conn = mysqli_connect("localhost", "root", "", "jobPortal");
if (!$conn) {
    echo "NOt connected";
} else {
    echo "connected";
}
$sql = "INSERT INTO Register(ID,NAME,EMAIL,PASSWORD)values('1',namee','ramesh@gmail.com','pw')";
$result = mysqli_query($conn, $sql);

if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $password;

    //     $sql = "INSERT INTO Register(NAME, EMAIL, PASSWORD)
    //     VALUES('$name', '$email', '$password')
    //  ";


    $sql = "INSERT INTO Register(ID,NAME,EMAIL,PASSWORD)values('1',namee','ramesh@gmail.com','pw')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "data inserted";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="my-3">Register</h1>
        <form method="POST">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
            <input type="submit" name="register" class="mt-3 btn btn-primary col-12" value="Register">

        </form>
    </div>
</body>

</html>