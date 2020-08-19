<?php
 header('Content-Type: application/json');
 header('Access-Control-Alloew-Origin: *');
//fetching data sent by user
 $e = $_GET['email'];
 $p = $_GET['password'];
include('config.php');
$q = "SELECT * FROM user WHERE email='$e' AND password='$p'";
$s = mysqli_query($con, $q);
if(mysqli_num_rows($s)==1)
{   
    $row = mysqli_fetch_assoc($s);
    $e = $row["email"];
    $p = $row["password"];
    $data = [ 'email' => $e, 'password' => 'Crypted Password->'.$p];
    echo "Loggined";
    echo json_encode($data);
    
} 
else
{
    echo "Error";
}



?>