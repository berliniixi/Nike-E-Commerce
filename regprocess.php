<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	include "connection.php";

$firstname = $_POST['name'];
$surname = $_POST['surname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


if (isset($_POST['seller'])){
	$seller = 1;
}
else{
	$seller = 0;
}

if (isset($_POST['customer'])){
	$customer = 1;
}
else{
	$customer = 0;
}
 // echo "Firstname:" . $firstname . 
      // "LastName:" . $lastname . 
	  // "username:" . $username . 
	  // "password:" . $password . 
	  // "password_rpt:" . $password_rpt . 
	  // "seller:" . $seller .
	  // "customer:" . $customer;
	  
	  
	

$sql = "INSERT INTO users (firstname, surname, username, email,password, seller, customer)
VALUES ('$firstname', '$surname', '$username', '$email','$password', '$seller', '$customer')";

if ($conn->query($sql) === TRUE) {
    echo "New user account created successfully";
	header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>


