<?php
$conn=mysqli_connect("localhost","root","","dav");
function display()
{
    global $conn;
$query= "SELECT * FROM `record`";
$result=mysqli_query($conn,$query);
if($result==TRUE)
{
   ?>
    <table border="5" width="50%">
Php code:
        <?php
        while($data=mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td> <?php echo $data["Username"];
                echo "<br>";?>  
                </td>
                <td> <?php echo $data["Password"];
                echo "<br>";?>  
                </td>
                <td> <?php echo $data["Education"];
                echo "<br>";?>  
                </td>
                <td> <?php echo $data["Gender"];
                echo "<br>";?>  
                </td>
        </tr>
        <?php
        }
        ?>
        </table>
        <?php
        }
        else{
            echo "error";
        }
}
?>

<!DOCTYPE html>
<html>
<body>
    <?php
    display();
    ?>
</body>
 </html> 