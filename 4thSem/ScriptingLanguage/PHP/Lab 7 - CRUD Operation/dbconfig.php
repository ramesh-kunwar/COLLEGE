
<?php 

$host = "localhost";
$dbName = "currencyConverter";
$dbUser = "root";
$dbPassword = "";

$connect = mysqli_connect($host, $dbUser, $dbPassword, $dbName);

if(!$connect){
    echo "Connection failed";
}


echo "hello";
?>