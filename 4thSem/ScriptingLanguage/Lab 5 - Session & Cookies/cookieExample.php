<?php 

$_COOKIE["username"] = "davuser";
$_COOKIE["password"] = "davpassword";

setcookie("User", "Ramesh");

$name = "dav_cookie";
$value = "cookie_in_php";
$time = time() + 60 * 60;
echo $time;

setcookie($name, $value, $time);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Five</title>
</head>
<body>
    <h1>Hello</h1>
    <h1>
        <?php $_COOKIE[$name];?>
    </h1>
    
</body>
</html>