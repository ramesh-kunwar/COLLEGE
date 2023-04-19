<?php
$dbName = "playerDB";

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$sports = $_POST['sports'];


$conn = mysqli_connect("localhost", "root", "", $dbName);
// make a conneciton
if (!$conn) {
    die("Database Connection failure");
}


function insertData()
{


    $sql = "INSERT INTO `playerDetails` ( `Name`, `Phone`, `Address`,`sports`) VALUES ( '$GLOBALS[name]', '$GLOBALS[phone]', '$GLOBALS[address]', '$GLOBALS[sports]')";
    $response = mysqli_query($GLOBALS['conn'], $sql);

    if ($response) {

        echo ("<div class='alert alert-success'> Data Inserted Successfully</div>");
    } else {
        echo ("<div class='alert alert-success'> Data Insertion Failed</div>");
    }
}


function displayResult()
{
    $sql = 'SELECT * FROM playerDetails';
    $response = mysqli_query($GLOBALS['conn'], $sql);


    if (mysqli_num_rows($response) > 0) { ?>
        <table class="table">

            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>
            <?php while ($data = mysqli_fetch_assoc($response)) {

            ?>



                <tbody>
                    <tr>
                        <th scope="row"><?php echo $data['ID']; ?></th>
                        <td><?php echo ($data['ID']); ?></td>
                        <td><?php echo $data['Name']; ?></td>
                        <td><?php echo $data['Phone']; ?></td>
                        <td><?php echo $data['Address']; ?></td>
                        <td><?php echo $data['sports']; ?></td>
                        <td>
                            <form action="" method="post">
                                <!-- <input type='submit' class="btn btn-danger" value="delete" name='delete' onclick="deleteData()"> -->
                        <td><a href="delete.php?id=<?php echo $data['ID']; ?> ">Delete</a></td>

                        </form>
                        </td>
                    </tr>


                </tbody>


            <?php } ?>
        </table>
<?php }
}


if (isset($_POST['addDetails'])) {

    insertData();
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>

<body>

    <div class="container col-md-6 offset-md-3 ">
        <!-- form -->
        <form action="form.php" method="post">

            <h1>Enter Details</h1>
            <div class="mt-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mt-3">
                <label>Phone</label>
                <input type="number" name="phone" class="form-control">
            </div>
            <div class="mt-3">
                <label>Address</label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="mt-3">
                <label>Sports</label>
                <input type="text" name="sports" class="form-control">
            </div>

            <div class="mt-3 d-flex justify-content-center gap-4">
                <input type="submit" value="Add Details" name='addDetails' class="btn btn-primary ">
                <input type="submit" value="Show Details" name='showDetails' class="btn btn-danger ">

            </div>

            <h1></h1>


        </form>

        <!-- output -->
        <div class="mt-5">
            <h1></h1>
            <?php

            if (isset($_POST['showDetails'])) {
                displayResult();
            }

            ?>
        </div>
    </div>


</body>

</html>


<?php
