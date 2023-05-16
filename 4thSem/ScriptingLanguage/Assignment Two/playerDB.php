<?php 

$dbName = "playerDB";
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";

$connect = mysqli_connect($dbHost, $dbUser, $dbPassword);

if (!$connect) {

    die("Database Connection failure");
    // mysqli_error();
} else {
    echo "Database Connection success";
}


// create a database
$sql = "CREATE DATABASE ".$dbName;

$response = mysqli_query($connect, $sql);

if($response){
    echo "DB created successfully";
}else{
    echo "DB creation failed";
}

?>