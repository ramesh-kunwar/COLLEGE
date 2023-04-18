<!-- Dashboard page -->
<?php

session_start();

function logout()
{
    session_destroy();
    header("location: login.php");
}


if (isset($_POST["logout"])) {
    logout();
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <style>
        h1 {
            font-size: 4rem;
            font-weight: bolder;
            font-family: sans-serif;

        }

        .dashboard {
            height: 100vh;
            /* align-items: center; */
        }
    </style>
</head>

<body>
    <div class="container dashboard">
        <div class=" text-center row align-items-center h-100">

            <?php

            // check if access is given or not

            if (!isset($_SESSION['accessGrant'])) { ?>

                <h1> <?php echo "Access Denied"; ?></h1>
                <a href="login.php" class="btn btn-primary cols-4 text-center">Go Back</a>
            <?php } else { ?>

                <h1> <?php echo "Welcome To Dashboard"; ?></h1>
                <form action="" method="post">
                    <input type="submit" value="Logout" name="logout" class="btn btn-primary col-12">
                </form>
            <?php  }
            ?>



        </div>
    </div>
</body>

</html>