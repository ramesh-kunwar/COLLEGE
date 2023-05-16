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

// displaying data from session
echo "DATA IN SESSION ARE..... <br>";
echo $_SESSION['UserName'] . "<br>";
echo $_SESSION['password'] . "<br>";
echo $_SESSION['userType'] . "<br>";

// storing in cookie
setcookie("UserName", "Hrishik");
setcookie("Password", "hrishikRoot");
setcookie("UserType", "Student");

// displaying cookie value
echo "DATA IN COOKIES ARE..... <br>";

echo $_COOKIE['UserName'] . "<br>";
echo $_COOKIE['Password'] . "<br>";
echo $_COOKIE['UserType'] . "<br>";


?>
