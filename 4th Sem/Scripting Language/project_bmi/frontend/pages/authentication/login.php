
<?php


// taking data from form in php

/**
 * isset() - built in funciton in php whhich is used to check whether the field has value set or not
 */
$email_error = "";
$password_error = "";

  if (isset($_POST['login'])) {
    # code...
    $email = $_POST['email'];
    $password = $_POST['password'];

  
  
    if ($email == "") {
      $email_error = "Email field is blank <br>";
    }else{
      echo "Email is : " . $email;
    }
    if ($password == "") {
      $password_error = "Password field is blank <br>" ;
    }else{
      echo "Password is : " .$password;
    }
  }

 



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
  </head>
  <body>
  <div class="container">
      <h1 class="text-center py-5  ">Login Page</h1>
      <div class="row">
        <div class="col-md"></div>
        <div class="col-md">
          <form method="POST" action="login.php">
            <div class="form-group">
              <label for="">Email</label>
              <input class="form-control my-2" name="email" type="email" />
              <p class="text-danger font-italic" >
                <?php 
                  if($email_error){
                    echo $email_error;
                  }
              
                ?>
              </p>
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input
                class="form-control my-2"
                name="password"
                type="password"
              />
             <p class="text-danger font-italic">
             <?php 
               
               if($password_error){
                 echo $password_error;
               }
             ?>
             </p>
            </div>


            <input type="submit" value="Log In" class="btn btn-success  col-12" name="login" />

       
          </form>
        </div>
        <div class="col-md"></div>
      </div>
    </div>
  </body>
</html>
