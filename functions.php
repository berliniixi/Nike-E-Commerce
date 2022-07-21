<?php



   include("connection.php");

   if(!isset($_SESSION)) 
   { 
       session_start(); 
   } 
   
    if (isset($_POST['username'], $_POST['password'], $_POST['role'])) 
    {
        $username1 = $_POST['username'];
     	$password1 = $_POST['password'];
        $role = $_POST['role'];
        
    
        $sql = "SELECT user_id FROM users WHERE username = '$username1' and password = '$password1'";

        $result = $conn->query($sql);

         if ($result->num_rows > 0) {
            
                header("Location: index.php");
                
        }
        else
        {
            header("Location: ../Assignment1/login.php");
        }
    }

?>