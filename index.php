<!doctype html>  
<html>  
<head>  
<title>Register</title>  
 <link rel="stylesheet" href="style.css">

</head>  


<body>  
    <script src="https://www.google.com/recaptcha/api.js" async defer></script> 
    <center><h1>CREATE REGISTRATION AND LOGIN</h1></center>  
   <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>  
    <center><h2>Registration Form</h2></center> 
   
<form name="myForm" action="" method="POST" >  
    <legend>  
    <fieldset>  
    <br>      
Email: <input type="email" name="e" required><br />   <br>  
Password: <input type="password" name="p1" required><br /> <br>
Re-Password: <input type="password" name="p2" required><br /> <br>

<br><br>  
  <input type="submit" value="Register" name="submit" />  
              
        </fieldset>  
        </legend>  
</form>  
<?php
if(isset($_POST['submit']) )
{
     if($_POST['p1']==$_POST['p2'])
     {
        $e = $_POST['e'];
        $p = $_POST['p1'];
        
       
        if (filter_var($e, FILTER_VALIDATE_EMAIL))
        {
             $e = filter_var($e, FILTER_SANITIZE_EMAIL);
             $p = md5($p);
             header("Location: api_insert.php?email=".$e."&password=".$p."");
        } 
        else
        {
             echo("$e is not a valid email address");
        }
     }
     else
     {
         echo "Password and Re-Password is not same!!!";
     }
}




?>

</body>  
</html>  