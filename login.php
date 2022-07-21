
<?php

session_start();

    include("connection.php");
	include("functions.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel ="stylesheet" href = "style/login.css">

    <title>Document</title>
</head>
<body>
<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
                        <img src = "pictures/avatar.jpg" class="brand_logo" alt="avatar img">
                    </div>
                </div>
			<div class="d-flex justify-content-center form_container">
				<form method="POST" action="functions.php">
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" class="form-control input_user" value="" placeholder="Username" required>
					</div>

						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="Password" required>
						</div>

						<label for="role">Role:</label>
							<select id="role" name="role">
								<option value="seller">Seller</option>
								<option value="customer">Customer</option>
							</select>
                        <div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-4 login_container">
								<input type="submit" name="submit" class="btn btn-danger" value="Login">
				        </div>
				</form>
			</div>
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Do not have an account? 
                        <a href="register.php" class="ml-2">Register here!</a>
					</div>
					<div class="d-flex justify-content-center links" >
						<a href="#" class="ml-2">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
</div>
</body>
</html>
