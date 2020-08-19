<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Login Form</h2>
<div class="container">
  <form action="" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="uid">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="e" placeholder="Enter Your Email Id Here.." required/>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="password">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="lname" name="p" placeholder="Enter Your Password Here.." required/>
      </div>

    <div class="row">
      <input type="submit" name="submit">
    </div>
  </form>
</div>


<?php
if(isset($_POST['submit']))
{
     $e = $_POST['e'];
     $p = $_POST['p'];
    
     if (filter_var($e, FILTER_VALIDATE_EMAIL))
     {
          $e = filter_var($e, FILTER_SANITIZE_EMAIL);
          $p = md5($p);
          header("Location: api_fetch.php?email=".$e."&password=".$p."");
     } 
     else
     {
          echo("$e is not a valid email address");
     }
}




?>
</body>
</html>
