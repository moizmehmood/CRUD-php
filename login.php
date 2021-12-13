<?php
include("loginDB.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="loginDB.php" method="post">

<div>
 <?php
 $_SESSION['user_id'] = $userid;
   $_SESSION['user_name'] = $username;
 ?>
  <label for="stid"><b>Student ID</b></label>
  <input type="text" placeholder="Enter Student ID" name="stid" required><br>

  <label for="stname"><b>Student Name</b></label>
  <input type="text" placeholder="Enter Student Name" name="stname" required><br>

  <button type="submit" class="login" src="http://localhost/datafetch/datafetch.php">Login</button>
</div>
</form> 
</body>
</html>