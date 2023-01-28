<?php
$servername = "localhost";
$username = "root";
$password = "";
// $database = "DAV";
$conn = mysqli_connect("localhost", "root", "", "DAV");
if ($conn) {
    echo "Connection successful <br>";
} else {
    echo "Connection failed <br>";

}


// delete
$sql = "DELETE FROM Employee where id='105'";

$result = mysqli_query($conn, $sql);

?>