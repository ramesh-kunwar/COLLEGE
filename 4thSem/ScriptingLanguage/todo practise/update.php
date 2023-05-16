<?php 
include "connection.php";


$countryId = $_POST['id'];
$countryName= $_POST['countryName'];
$countryCode= $_POST['countryCode'];


$sql = "UPDATE ccCountry set countryName='$countryName', countryCode='$countryCode' where countryId='$countryId'";
$result = mysqli_query($conn, $sql);

if($result){
    header('location:display.php');
}

?>