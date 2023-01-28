<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "DAV";
$conn = mysqli_connect($servername, $username, $password, $database);
if($conn){
    echo "Connection successful <br>";
}else{
    echo "Connection failed <br>";

}


// create table
$sql = "CREATE TABLE DAV.Employee(
    ID int,
    Namee varchar(255),
    Salary int(255)
    Addresss varchar(255)
    
    )";

$result = mysqli_query($conn, $sql);
if($result){
    echo "Table created <br>";
}else{
    echo "Table creation failed <br>";

}
?>