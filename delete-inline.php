<?php
$stu_id=$_GET['id'];

 $conn = mysqli_connect('localhost','root',"",'registration') or die("error");
 $sql = "DELETE FROM studenttable WHERE id=$stu_id";
 $result=mysqli_query($conn,$sql) or die("error");
?>