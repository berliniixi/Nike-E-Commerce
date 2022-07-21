<?php 

    // include("function.php");    

    session_start();

    if(isset($_SESSION['user_id']))
    {
        unset($_SESSION['user_id']);
        header("Location: login.php");

    }
    else{
        unset($_SESSION['customer_id']);
        header("Location: login.php");

    }

?>