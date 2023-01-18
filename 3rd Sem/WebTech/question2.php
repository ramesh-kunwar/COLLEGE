<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login";


$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn) {
    echo "Connection Success <br>";
}else{
    echo "Connection failed";
}
$name = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * from auth where name='$name'";
$result = mysqli_query($conn, $sql);
if($result){
    echo "Login Successfully";
}else{
    echo "Login failed";
}
?>