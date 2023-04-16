<?php


session_start();

// get email and password
function checkCredentials()
{
    $rootEmail = "ramesh@gmail.com";
    $rootPassword = "ramesh";

    // check if email and pw match

    if ($_POST['email'] == $rootEmail && $_POST['password'] == $rootPassword) {
        $_SESSION['grantAccess'] = true;
        header("location: dashboard.php");
        // session_destroy();
        return true;
    }
}

// if email pw doesn't match ->  count login attempts using session
function countAttempt()
{

    if (!checkCredentials()) {
        echo "doesn't match";
        if (!$_SESSION['count']) {
            $_SESSION['count'] = 1;
        } else {
            $count = $_SESSION['count'] + 1;

            $_SESSION['count'] = $count;
        }

        return $_SESSION['count'];
    }
}










if (isset($_POST['submit'])) {
    $attempt = countAttempt();
    // countAttempt();
    if ($attempt >= 3) {
        // set session for block;
        // $_SESSION['block'] = true;
        setcookie("BlockedCookie", "you have been blocked", time() + (10 * 1));
    }
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
            if ($_COOKIE["BlockedCookie"]) { ?>
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
            if ($_COOKIE['BlockedCookie']) { ?>
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