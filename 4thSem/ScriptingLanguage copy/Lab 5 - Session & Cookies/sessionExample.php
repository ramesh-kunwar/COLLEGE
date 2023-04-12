<?php
// setting value to session
// session must be started before using it

session_start(); // function is used to start session

// setting value to session
// method one
$_SESSION["name_of_country"] = "Nepal";
echo $_SESSION["name_of_country"] . "<br>";

// method two
$_SESSION["sessionData"] = [
    "username" => "userDav",
    "password" => "dav123"
];

echo $_SESSION["sessionData"]["username"] . "<br>";

?>

<a href="dashboard.php"> Go To Dashboard</a>