<!-- Write a php program that takes 2 inputs from a html form and perform the following operation
a. sum      b. product      c. difference       d.division     e. multiplication -->


<?php



if (isset($_POST['calculate'])) {

    $selectOption  = $_POST['calculationOptions'];
    $num1  = $_POST['num1'];
    $num2  = $_POST['num2'];


    if ($selectOption == "add") {
        $result = $num1 + $num2;
    } else if ($selectOption == "subtract") {
        $result = $num1 - $num2;
    } else if ($selectOption == "multiplication") {
        $result = $num1 * $num2;
    } else if ($selectOption == "division") {
        $result = $num1 / $num2;
    } else if ($selectOption == "modulus") {
        $result = $num1 % $num2;
    } else {
        echo "Select valid options";
    }
} else {
    echo "not clicked";
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1: Caluclator</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Calculator</h1>
        <form action="calculator.php" method="POST">
            <!-- num1 -->
            <label for="">Num1</label>
            <input type="number" class="form-control" name="num1">

            <!-- num 2 -->
            <label for="">Num2</label>
            <input type="number" class="form-control" name="num2">

            <!-- options -->
            <label for="">Select Options</label>
            <br>
            <select name="calculationOptions" id="" class="form-control">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiplication">Multiiplication</option>
                <option value="division">Divison</option>
                <option value="modulus">Modulus</option>
            </select>

            <br>
            <!-- output -->
            <label for="">Output: </label>
            <span><?php
                    echo  $result;
                    ?></span>


            <!-- button -->
            <br>
            <button name="calculate" class="btn btn-primary mt-3">Calculate</button>


        </form>
    </div>
</body>

</html>