<?php
   session_start();
   if(isset($_SESSION['user_name'])){
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
       session_destroy();
       header("Location: http://localhost/datafetch/login.php");
   }
//    unset($_SESSION['user_name']);
  
   
//    echo 'You have cleaned session';
   //header('Refresh: 2; URL = login.php');
?>