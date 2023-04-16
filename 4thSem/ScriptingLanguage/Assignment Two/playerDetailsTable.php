<?php 
$dbName = "playerDB";
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";

$connect = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if (!$connect) {

    die("Database Connection failure");
    // mysqli_error();
} else {
    echo "Database Connection success";
}


// create table
$sql = "CREATE TABLE playerDetails(
	ID int not null PRIMARY KEY AUTO_INCREMENT,
    Name varchar(255) not null,
    Phone int not null,
    Address varchar(255) not null  
)";

$response = mysqli_query($connect, $sql);
if($response){
    echo "Table created successfully";
}else{
    echo "Table creation failed";
}

?>