<?php


function checkAvailability()
{
    // groups
    $groups = [
        "groupOne" => ['team A', 'team C', 'team E'],
        "groupTwo" => ['team B', 'team D', 'team F']
    ];

    $groupName = $_POST['groupName'];
    $teamName = $_POST['teamName'];

    // echo $teamName." team name <br>";
    // echo $groupName." group name";



    $groupOne = $groups["groupOne"];
    // $groupTwo = $groups['groupTwo'];
    // echo $groups[0][0];

    for ($i = 0; $i < count($groupOne); $i++) {
        if ($groupName == "groupOne") {
            for ($j = 0; $j < count($groups[$groupName]); $j++) {
                if ($groups[$groupName][$j] == $teamName) {
                    echo "Booked";
                    break;
                }
                break;
            }
        }
    }
    // echo $groups[0];
}

if (isset($_POST["check"])) {


    checkAvailability();
    // echo $groups['groupOne'][0];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Study 4</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>

<body>


    <div class="container mt-5">
        <form action="" method="POST">
            <label for="">Group Name</label>
            <input type="text" class="form-control" name="groupName">
            <br>
            <label for="">Team Name</label>
            <input type="text" class="form-control" name="teamName">
            <input type="submit" name="check" value="Check Availability" class="mt-3 btn btn-primary ">
        </form>
    </div>
</body>

</html>