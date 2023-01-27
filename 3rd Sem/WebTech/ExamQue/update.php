<?php
$servername = "localhost";
$username = "root";
$password = "";
 $database = "DAV";
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {
    echo "Connection Success";
}

$sql = "UPDATE Employee set ID='900' where ID='102' ";
$result = mysqli_query($conn, $sql);

$sql = "UPDATE Employee set ID='903' where ID='103' ";
$result = mysqli_query($conn, $sql);


?>