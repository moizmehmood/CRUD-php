<?php
// session_start();
$userid = $_POST['stid'];
$username = $_POST['stname'];

$conn = mysqli_connect('localhost','root',"",'registration') or die("error");
 $sql ="SELECT * FROM studenttable WHERE studentid='$userid' and name='$username'"; 
 $result=mysqli_query($conn,$sql) or die ("quewry problm");
//  $_SESSION['user_name'] = $username;
 $row=mysqli_fetch_assoc($result) ;
 if($row['studentid']==$userid && $row['name']==$username){
    header("Location: http://localhost/datafetch/datafetch.php");
 }
 else
 {
     echo "erroraaa";
 }
 $result=mysqli_query($conn,$sql) or die("error");
?>