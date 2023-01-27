<?php
$servername = "localhost";
$username = "root";
$password = "";
// $database = "exam";
$conn = mysqli_connect($servername, $username, $password);
if ($conn) {
    echo "Connection Success";
}
// creating a database
$sql = "CREATE DATABASE DAV";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "DB Created";
}else{
    echo "DB not created";
}

?>