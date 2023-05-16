<h1>Dashboard</h1>
<?php
session_start();

function logout()
{
    session_destroy();
    header("location: dashboard.php");

}




if (isset($_SESSION["sessionData"])) {

    if (isset($_POST["logout"])) {
        logout();
    }

    echo "Welcome  " . $_SESSION["sessionData"]["username"] . "<br>";
    echo "you are from " . $_SESSION["name_of_country"] . "<br>";
?>
    <form action="dashboard.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
<?php

} else {
?>
    <a href="sessionExample.php">Login First</a>
<?php }

?>