<?php
$servername = "localhost";
$username = "root";
$password = "";
// $database = "DAV";
$conn = mysqli_connect("localhost", "root", "", "DAV");
if ($conn) {
    echo "Connection successful <br>";
} else {
    echo "Connection failed <br>";

}
?>

<html>
    <head>
        <title>a</title>
        <body>
            <table border="2">
                <th>ID</th>
                <th>name</th>
                <th>salary</th>
                <th>address</th>
            </table>
        </body>
    </head>
</html>


<?php


// display
$sql = "SELECT * from Employee where Name='Ram'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "
<tr>
        <td>".$row['ID']."</td>
        <td>".$row['Name']."</td>
        <td>".$row['Salary']."</td>
        <td>".$row['Address']."</td>

        </tr>
      
        ";
    }
}

?>