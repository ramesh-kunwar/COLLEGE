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
$sql = "INSERT INTO `Employee` (`ID`,`Name`, `Salary`, `Address`)
VALUES ('102', 'Ram', '10000', 'Dhobighat'),
('103', 'Niraj', '20000', 'Satdobato'),
 ('104', 'Kiran', '5000', 'Kalanki'),
  ('105', 'Krijan', '2000', 'Kalanki')
";
// $sql = "INSERT INTO `Employee` (`ID`, `Name`, `Salary`, `Address`) VALUES ('101', 'Ramesh', '10000', 'Dhobighat')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "insertion successful <br>";
} else {
    echo "insertion failed <br>";

}

?>