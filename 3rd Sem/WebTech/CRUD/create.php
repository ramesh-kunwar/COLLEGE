<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
if ($conn) {
    echo "Connection successful <br>";
} else {
    echo "Connection failed <br>";

}

// CREATING A DB
$sql = "CREATE DATABASE DAV";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Data base created <br>";
} else {
    echo "Data base creation failed <br>";

}
// create table

?>