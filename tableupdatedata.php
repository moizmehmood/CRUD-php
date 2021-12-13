<?php
$stu_id=$_POST['id'];
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
$sql = "UPDATE studenttable set  studentid='$student_id' , name='$student_name',
fathername='$father_name',nic='$nic',
phoneno='$phone_no',email='$e_mail',
adress='$address' WHERE id=$stu_id";
$result=mysqli_query($conn,$sql);
mysqli_close($conn);
?>