<?php

function getTagName($data)
{
    $array = ["danger", "success", "info", "warning"];
    $tagname = "";
    switch ($data) {
        case 1:
            $tagname = $array[0];
            break;
        case 2:
            $tagname = $array[1];
            break;
        case 3:
            $tagname = $array[2];
            break;
        case 4:
            $tagname = $array[3];
            break;

        default:
            # code...
            break;
    }
    return $tagname;
}

// example 2


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


    if ($action == "add") {
        $result = doSum($numOne, $numTwo);
        echo $result;
    } else if ($action == "sub") {
        $result = doSub($numOne, $numTwo);
    } else if ($action == "mul") {
        $result = doMul($numOne, $numTwo);
    } else if ($action == "div") {
        $result = doDiv($numOne, $numTwo);
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
        <div class="row">
            <!-- col start -->
            <div class="col-md">
                <div class="card p-5">
                    <div class="  <?php echo 'alert alert-' . getTagName(1) ?>">
                        <?php echo getTagName(1) ?>
                    </div>
                    <div class="  <?php echo 'alert alert-' . getTagName(2) ?>">
                        <?php echo getTagName(2) ?>
                    </div>
                    <div class="  <?php echo 'alert alert-' . getTagName(3) ?>">
                        <?php echo getTagName(3) ?>
                    </div>
                    <div class="  <?php echo 'alert alert-' . getTagName(4) ?>">
                        <?php echo getTagName(4) ?>
                    </div>
                </div>

            </div>
            <!-- col end  -->
            <!-- col start -->
            <div class="col-md">
                <div class="card container p-5 mt-5">
                    <h1>Calculator</h1>
                    <p class="">Result: <?php echo $result;?></p>

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



    </div>
</body>

</html>