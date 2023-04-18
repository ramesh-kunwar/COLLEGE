<?php

session_start();

// root email and password
$rootEmail = "ramesh@gmail.com";
$rootPassword = "ramesh";

// get credentials
$email = $_POST['email'];
$password = $_POST['password'];


function checkCredentials()
{

    if (($GLOBALS["rootEmail"]  != $GLOBALS["email"]) && ($GLOBALS["rootPassword"] != $GLOBALS["password)"])) {

        return false;
    } else {

        return true;
    }
}


function login()
{
    echo "login";

    if (checkCredentials()) {
        session_start();
        $_SESSION['accessGrant'] = true;


        header("location: dashboard.php");
    } else {
        $updateCookieValue = $_COOKIE["Count"] + 1;
        setcookie("Count", $updateCookieValue, time() * (10) + 1);
    }
}


function blockUser()
{
    if ($_COOKIE["Count"] >= 3) {
        return true;
    }
}

if (isset($_POST['submit'])) {
    // echo "submit";
    setcookie("Count", 0, time() * (10) + 1);


    // checkCredentials();
    login();
    blockUser();
    // session_start();


    // header("location: demo.php");
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <form action="login.php" method="POST" class="col-md-4 offset-md-4 justify-content-center">
            <h1 class="fw-bold display-4 my-3">Login</h1>


            <!-- send message if user is blocked -->
            <?php
            if (blockUser()) { ?>
                <p class="alert alert-danger">
                    <?php echo "You have been BLOCKED"; ?>
                </p>
            <?php }
            ?>
            <!-- / send message if user is blocked -->

            <!-- / send message if user is blocked -->


            <div class="mt-3">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="mt-3">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <!-- disable button if user is blocked -->
            <!-- <input type="submit" name="submit" value="Login" class="btn btn-primary mt-4 col-12"> -->

            <!-- <input type="submit" value="Login" name='submit' class="btn btn-primary mt-4 col-12"> -->

            <?php
            if (blockUser()) { ?>
                <input type="submit" name="submit" value="Login" disabled class="btn btn-primary mt-4 col-12">

                </input>
            <?php } else { ?>
                <input type="submit" name="submit" value="Login" class="btn btn-primary mt-4 col-12 ">

            <?php  }
            ?>
            <!-- / disable button if user is blocked -->

        </form>
    </div>
</body>

</html>