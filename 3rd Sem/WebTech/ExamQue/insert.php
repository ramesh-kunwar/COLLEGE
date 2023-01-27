<?php
$servername = "localhost";
$username = "root";
$password = "";
 $database = "DAV";
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {
    echo "Connection Success";
}
$query = "INSERT INTO Employee (`ID`, `Name`, `Salary`, `Address`) 
VALUES ('101', 'Ramesh', '10000', 'Dhobighat'),  
('102', 'Bpin', '10000', 'Kalanki'),  
('103', 'Niraj', '20000', 'Satdobato'),
 ('104', 'Kiran', '5000', 'Kalanki'),
  ('105', 'Krijan', '2000', 'Kalanki')
";
$result = mysqli_query($conn, $query);

?>