<?php
 header('Content-Type: application/json');
 header('Access-Control-Alloew-Origin: *');
 $e = $_GET['email'];
 $p = $_GET['password'];
 if (filter_var($e, FILTER_VALIDATE_EMAIL))
    {
             $e = filter_var($e, FILTER_SANITIZE_EMAIL);
             include('config.php');
             $q = "SELECT * FROM user WHERE email='$e' AND password='$p'";
             $s = mysqli_query($con, $q);
             if(mysqli_num_rows($s)==0)
             {   
                 $q = "INSERT INTO user (email, password) VALUES ('$e','$p')";
                 if(mysqli_query($con, $q))
                 {
                    echo "You are registered!!!";
                 }
                 else
                 {
                   echo "Error!!!";
                 }
             } 
             else
             {
                echo "You are Already Registered!!!";
             }

    }
    else
    {
        echo "Not a Vaild Email ";
    }     
 


?>