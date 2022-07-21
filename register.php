<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  include("connection.php");
  include("functions.php");
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="style/register.css">
  <title>Register Form</title>
</head>
<body>

<form method="POST" action="regprocess.php">
  <div class="container">
    <div class="form-group">
      <div class="row">
          <div class="d-flex justify-content-start">
            <div>
              <h1><i class="fa fa-registered" aria-hidden="true"></i>egister Form</h1>
            </div>
          </div>
        </div>

          <div>
            <hr>
          </div>

          <div class="row justify-content-around">
              <div class="col-4">
                <label for="name" ><i class="fa fa-user" aria-hidden="true"></i> Name</label>
                <input class="form-control" type="text" name="name" class="name"  placeholder="Enter your Name.." required>
              </div>
          
              <div class="col-4">
                <label for="surname" ><i class="fa fa-user" aria-hidden="true"></i> Surname</label>
                <input class="form-control" type="text" name="surname" class="surname"  placeholder="Enter your Surname.." required>
              </div>       
          </div>

        <div class="row justify-content-around">
          <div class="col-4">
            <label for="username"><i class="fa fa-user-circle" aria-hidden="true"></i> Username</label>
            <input class="form-control" type="text" name="username" class="username" placeholder="Enter your Username.." required>
          </div>

          <div class="col-4">
            <label for="email" ><i class="fa fa-envelope" aria-hidden="true"></i> email</label>
            <input class="form-control" type="email" name="email" placeholder="@example.com" required>
          </div>
        </div>

        <div class="row justify-content-around">
          <div class="col-4">
            <label for="password"><i class="fa fa-key" aria-hidden="true"></i> Password</label>
            <input class="form-control" type="password" name="password" class="password" placeholder="Enter your password.." required>
          </div>

          <div class="col-4">
            <div class="text-start">
              <label for="" class="form-label"><i class="fa fa-check-circle" aria-hidden="true"></i> Choose..</label>
            </div>
                <input type='checkbox' id='seller' name='seller' value='Seller'>
                <label for='seller'> Seller</label><br>
                <input type='checkbox' id='customer' name='customer' value='Customer'>
                <label for='customer'>Customer</label><br>
          </div>
        </div>
        
        <div class="d-flex justify-content-center">
          <div class="register_btn">
          <input type="submit" class="btn btn-primary" name="register" value="Register now">

          </div>
        </div>

        <div class="mt-4">
          <div class="d-flex justify-content-center links">
            You have already acount? 
            <a href="login.php" class="ml-2">Login</a>
          </div>
        </div>
      </div>
  </div> 
</form>
</body>
</html>