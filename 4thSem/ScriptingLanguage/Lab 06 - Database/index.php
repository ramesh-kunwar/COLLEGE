<?php


/**
 *  DB: currencyConverter
 * host Name: "localhost" or "127.0.0.1"
 * Host User: "root"
 * host User Password: "" -> by default blank
 */

$dbName = "currencyConverter";
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

// Inserting data in database using INSERT query and mysqli_query() 

$countryname = "Nepal";
$countryCode = "np";

// methdo 1
$sql = "INSERT INTO ccCountry (countryName, countryCode) 
        VALUES('$countryname', '.$countryCode')";

// method 2
// $sql = "INSERT INTO ccCountry (countryName, countryCode) 
//         VALUES('{$countryname}', '{.$countryCode'})";


$response = mysqli_query($connect, $sql);

if ($response) {
    echo "Data inserted successfully";
} else {
    echo "Data insertion failed";
}
