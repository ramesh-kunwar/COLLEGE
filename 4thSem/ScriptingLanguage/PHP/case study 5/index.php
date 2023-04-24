<?php


// fetch data
$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userContact = $_POST['userContact'];
$userTemporaryAddress = $_POST['userTemporaryAddress'];
$userPermanentAddress = $_POST['userPermanentAddress'];
$userFatherName = $_POST['userFatherName'];
$userMotherName = $_POST['userMotherName'];
$userWorkTitle = $_POST['userWorkTitle'];
$userWorkExperience = $_POST['userWorkExperience'];


// validate the data
function validateData()
{

    if (($GLOBALS["userName"] == "" &&
        $GLOBALS["userEmail"] == "" &&
        $GLOBALS["userContact"] == "" &&
        $GLOBALS["userTemporaryAddress"] == "" &&
        $GLOBALS["userPermanentAddress"] == "" &&
        $GLOBALS["userFatherName"] == "" &&
        $GLOBALS["userMotherName"] == "" &&
        $GLOBALS["userWorkTitle"] == "" &&
        $GLOBALS["userWorkExperience"] == ""
    )) {
        return false;
    } else {
        return true;
    }
}

// insert data in table
function insertData()
{
    if (!validateData()) {
        echo "All fields are required <br>";
    } else {

        // establish a connection
        $conn = mysqli_connect("localhost", "root", "", "Bank");
        if (!$conn) {
            echo "Not Connected...";
        }

        // inser data in db
        $sql = "INSERT INTO customerDetails 
            ( `userName`, `userEmail`, `userContact`, `userTemporaryAddress`,`userPermanentAddress`,`userFatherName`, `userMotherName`,`userWorkTitle`,`userWorkExperience`)
            values('$GLOBALS[userName]','$GLOBALS[userEmail]','$GLOBALS[userContact]','$GLOBALS[userTemporaryAddress]','$GLOBALS[userPermanentAddress]','$GLOBALS[userFatherName]','$GLOBALS[userMotherName]','$GLOBALS[userWorkTitle]','$GLOBALS[userWorkExperience]')
            ";

        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo "Data insertion failed";
        }
    }
}





if (isset($_POST["submit"])) {


    validateData();
    insertData();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case study 5</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>

<body>

    <form action="" method="POST" class="container">
        <div class="container my-5">
            <!-- personal details -->
            <div class="personal-detail">
                <h3>Personal Details</h3>
                <div class="mt-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="userName">
                </div>
                <div class="mt-3">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="userEmail">
                </div>
                <div class="mt-3">
                    <label for="">Contact</label>
                    <input type="number" class="form-control" name="userContact">
                </div>
            </div>
            <!-- personal details -->
            <!-- Address -->
            <div class="address mt-5">
                <h3>Address</h3>
                <div class="mt-3">
                    <label for="">Temporary Address</label>
                    <input type="text" class="form-control" name="userTemporaryAddress">
                </div>
                <div class="mt-3">
                    <label for="">Permanent Address</label>
                    <input type="text" class="form-control" name="userPermanentAddress">
                </div>
            </div>
            <!-- Address  -->
            <!-- family details -->
            <div class="family-detail mt-5">
                <h3>Family Details</h3>
                <div class="mt-3">
                    <label for="">Father's Name</label>
                    <input type="text" class="form-control" name="userFatherName">
                </div>
                <div class="mt-3">
                    <label for="">Mother's Name</label>
                    <input type="text" class="form-control" name="userMotherName">
                </div>
            </div>
            <!-- family details -->
            <!-- Work History -->
            <div class="work-history mt-5">
                <h3>Work History</h3>
                <div class="mt-3">
                    <label for="">Job Title</label>
                    <input type="text" class="form-control" name="userWorkTitle">
                </div>
                <div class="mt-3">
                    <label for="">Experience</label>
                    <input type="number" class="form-control" name="userWorkExperience">
                </div>
            </div>
            <!-- Work History -->
            <input type="submit" value="Submit" name="submit" class="btn btn-primary mt-4 col-">
        </div>

    </form>

</body>

</html>