<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "DAV";
$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn) {
    echo "Connection Success";
}

$sql = "CREATE TABLE `DAV`.`Employee` (`ID` INT(255) NOT NULL , `Name` VARCHAR(255) NOT NULL , `Salary` INT(255) NOT NULL , `Address` VARCHAR(255) NOT NULL )";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Table created";
} else {
    echo "Table not created";
}


//  inserting 5 values
$query = "INSERT INTO Employee (`ID`, `Name`, `Salary`, `Address`) VALUES ('101', 'Ramesh', '10000', 'Dhobighat')";
$result = mysqli_query($conn, $query);


?>