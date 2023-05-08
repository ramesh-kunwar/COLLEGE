<!-- store user information in session and cookies -->
<?php

$userName = "Ramesh";
$password = "root";
$userType = "student";

// storing in session
session_start();
$_SESSION['userName'] = $userName;
$_SESSION['password'] = $password;
$_SESSION['userType'] = $userType;

echo $_SESSION['password'];

// echo $userName;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap.min.css">

</head>

<body>

    <div class="container">
        <h1>Calculate Area </h1>
        <form action="sessionAndCookies.php" method="POST">



        </form>
    </div>

</body>

</html>