<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lab1";
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {
    echo "Connection Success";
}
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$gender = $_POST['gender'];
$sql = "INSERT INTO `details` (`name`, `email`, `phone`, `gender`) VALUES ('$name', '$email', '$number', '$gender')";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Data inserted Successfully";
} else {
    echo "Data insertion failed";
}
?>