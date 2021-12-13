<?php

$conn = mysqli_connect('localhost','root','','registration');

$student_id=$_POST['stid'];
$student_name=$_POST['stname'];
$father_name=$_POST['fname'];
$nic=$_POST['nic'];
$phone_no=$_POST['phoneno'];
$e_mail=$_POST['email'];
$address=$_POST['address'];

// $stid = $_REQUEST['stid'];
// 		$stname = $_REQUEST['stname'];
// 		$fname = $_REQUEST['fname'];
// 		$nic = $_REQUEST['nic'];
// 		$phoneno = $_REQUEST['phoneno'];
//     $email = $_REQUEST['email'];
//     $address = $_REQUEST['address'];
$sql = "INSERT INTO studenttable (studentid,name,fathername,nic,phoneNo,email,adress) 
VALUES ('$student_id','$student_name','$father_name','$nic','$phone_no','$e_mail','$address')";
$result=mysqli_query($conn,$sql);
mysqli_close($conn);

?>