<?php



function doSum($numOne, $numTwo)
{
    return $numOne + $numTwo;
}
function doSub($numOne, $numTwo)
{
    return $numOne - $numTwo;
}
function doMul($numOne, $numTwo)
{
    return $numOne * $numTwo;
}
function doDiv($numOne, $numTwo)
{
    return $numOne / $numTwo;
}

if (isset($_POST['result'])) {

    $action = $_POST['action'];
    $numOne = $_POST["numOne"];
    $numTwo = $_POST["numTwo"];

    if ($numOne == "" || $numTwo == "") {
        echo "Please enter num1 and num2";
    }

    if ($action == "add") {
        $result = doSum($numOne, $numTwo);
        echo $result;
    } else if ($action == "sub") {
        $result = doSub($numOne, $numTwo);
    } else if ($action == "mul") {
        $result = doMul($numOne, $numTwo);
    } else if ($action == "div") {
        if ($numTwo == 0) {
            echo "Num two must be greater than zero";
        } else {
            $result = doDiv($numOne, $numTwo);
        }
    }
} else {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Four</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>

<body>
    <div class="container pt-5">



        <!-- col start -->
        <div class="col-md-6">
            <div class="card container p-5 mt-5">
                <h1 class="text-center">Calculator</h1>
                <p class="">Result: <?php echo $result; ?></p>

                <form action="" method="POST" class="">
                    <input type="number" class="form-control" name="numOne">
                    <br> <input type="number" class="form-control" name="numTwo">
                    <br><select name="action" id="" class="form-control">
                        <option value="add">Add</option>
                        <option value="sub">Subtract</option>
                        <option value="mul">Multiply</option>
                        <option value="div">Divide</option>
                    </select>
                    <br>
                    <br><input type="submit" name="result" value="Result" class="btn btn-primary col-12">
                </form>
            </div>
        </div>
        <!-- col end -->





    </div>
</body>

</html>