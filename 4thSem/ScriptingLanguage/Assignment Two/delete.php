<?php
$player_id  =$_GET['id'];
$conn = mysqli_connect("localhost", "root", "", "playerDB");

$sql = "Delete from playerDetails where ID='$player_id'";
$result = mysqli_query($conn,$sql);

echo "Delete";
echo $player_id;
?>