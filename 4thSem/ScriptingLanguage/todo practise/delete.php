<?php 
include "connection.php";

$id = $_GET['id'];
echo $id;

$sql = "DELETE FROM ccCountry WHERE countryId='$id'";
$result = mysqli_query($conn, $sql);

if($result){
    header('location: display.php');
    // echo"Success";
}
?>

