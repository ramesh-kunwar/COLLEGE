<?php
$username = $_POST["username"];
$password = $_POST["password"];
$education = $_POST["education"];
$gender = $_POST["gender"];

$conn = mysqli_connect("localhost", "root", "", "dav");

$query = "INSERT INTO `record` (`Username`, `Password`, `Education`, `Gender`) VALUES ('$username', '$password', '$education', '$gender')";
$result = mysqli_query($conn, $query);

if ($result == TRUE)
    ; {
    echo "the records has been inserted successfully";
}

?>