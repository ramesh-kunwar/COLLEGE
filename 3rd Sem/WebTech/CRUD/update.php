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


// insert into table
$sql = "UPDATE Employee set ID=900, Name='Unique' , Salary=10000.9
WHERE ID=101
";
// $sql = "INSERT INTO `Employee` (`ID`, `Name`, `Salary`, `Address`) VALUES ('101', 'Ramesh', '10000', 'Dhobighat')";
$result = mysqli_query($conn, $sql);


$sql = "UPDATE Employee set ID='902', Name='Ram' , Salary='20000.6'
WHERE ID=102
";
$result = mysqli_query($conn, $sql);

?>