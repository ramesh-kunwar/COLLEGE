<?php 
echo "udp";
if(isset($_POST['btnUpdate'])){
    $id = $_POST["countryId"];
    $name = $_POST["countryName"];
    $code = $_POST["countryCode"];

    $sql = "UPDATE ccCountry SET countryName='".$name."', ".
    " countryCode='".$code."' WHERE countryId=".$id;

    $result = mysqli_query($connect , $sql);

    if($result){
        echo "Data updated successfully";
    }else{
        echo "Something went wrong";
        header("location: edit.php?id=$id");
    }
}else{
echo "not su";
}
