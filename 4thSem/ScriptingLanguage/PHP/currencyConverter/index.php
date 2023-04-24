<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <link rel="stylesheet" href="./css//bootstrap.min.css">
</head>
<body>
   <div class="container mt-5">
    <h1>Currency Converter</h1>

    <div class="card p-5 mt-5">
        <form action="func.php"  method="POST">
            <!-- <h3>Form</h3> -->
            <div class="form-group mb-2">
                <label for="currency">Enter Amount:  </label>
                <input type="number" name="amount" class="form-control">
            </div>
            <div class="form-group my-4">
                <label for="">Select Currency</label>
                <select name="country" id="" class="form-control">
                    <option value="1">Australia</option>
                    <option value="2">India</option>
                    <option value="3">US</option>
                    <option value="4">UK</option>
                    <option value="5">Japan</option>
                    <!-- <option value="6">India</option> -->
                </select>
            </div>
            <input name="convert" type="submit" value="Convert" class="btn btn-primary col-12">
        </form>
    </div>
   </div>

</body>
</html>