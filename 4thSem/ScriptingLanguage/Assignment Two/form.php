<?php
function insertData()
{
    $dbName = "playerDB";

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // make a conneciton
    $conn = mysqli_connect("localhost", "root", "", $dbName);
    if (!$conn) {

        die("Database Connection failure");
        // mysqli_error();
    } else {
        echo "Database Connection success";
    }

    $sql = "INSERT INTO `playerDetails` ( `Name`, `Phone`, `Address`) VALUES ( '$name', '$phone', '$address')";
    $response = mysqli_query($conn, $sql);

    if ($response) {
        echo "Data inserted successfully";
    } else {
        echo "Data insertion failed";
    }
}

if (isset($_POST['addDetails'])) {




    // $sql = "INSERT INTO playerDetails ('countryId','name','phone','address') VALUES(1,`Ramesh`, 993423,`dfa`";

    insertData();
    // displayData();

    echo "-----------------<br>";
}

if (isset($_POST['showDetails'])) {
    echo "hello";
    // displayData();
}

function deleteData()
{
    $dbName = "playerDB";
    $conn = mysqli_connect("localhost", "root", "", $dbName);



    $sql = 'SELECT * FROM playerDetails';
    $response = mysqli_query($conn, $sql);

    $data = mysqli_fetch_all($response, MYSQLI_ASSOC);
    echo $data[0];


    foreach ($data as $item) {
        echo  $item['name'] . "<br>";
    }
}

if (isset($_POST['delete'])) {

    deleteData();
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

            <div class="mt-3 d-flex justify-content-center gap-4">
                <input type="submit" value="Add Details" name='addDetails' class="btn btn-primary ">
                <input type="submit" onclick="displayData()" value="Show Details" name='showDetails' class="btn btn-danger ">

            </div>

            <h1></h1>


        </form>

        <!-- output -->
        <div class="mt-5">
            <h1>Output</h1>
            <?php displayData(); ?>
        </div>
    </div>


</body>

</html>


<?php

// DB NAME = "playerDB";
// table name = "playerDetails";


function displayData()
{


    $dbName = "playerDB";
    $conn = mysqli_connect("localhost", "root", "", $dbName);



    $sql = 'SELECT * FROM playerDetails';
    $response = mysqli_query($conn, $sql);


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
            <?php while ($data = mysqli_fetch_assoc($response)) { ?>



                <tbody>
                    <tr>
                        <th scope="row"><?php echo $data['ID']; ?></th>
                        <td><?php echo $data['Name']; ?></td>
                        <td><?php echo $data['Phone']; ?></td>
                        <td><?php echo $data['Address']; ?></td>
                        <td>
                            <form action="" method="post">
                                <input type='submit' class="btn btn-danger" value="delete" name='delete' onclick="deleteData()"></input>
                                <!-- <td><a href='delete.php?id=".$result['id']."' id='btn'>Delete</a></td>   -->

                            </form>
                        </td>
                    </tr>


                </tbody>


            <?php } ?>
        </table>
<?php }
}
?>