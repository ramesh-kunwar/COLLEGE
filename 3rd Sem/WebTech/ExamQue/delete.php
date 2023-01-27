<?php
$servername = "localhost";
$username = "root";
$password = "";
 $database = "DAV";
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {
    echo "Connection Success";
}

$sql = "DELETE from Employee where ID='101'";
$result = mysqli_query($conn, $sql);

$sql = "DELETE from Employee where ID='105'";
$result = mysqli_query($conn, $sql);




?>