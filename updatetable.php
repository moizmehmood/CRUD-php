<?php
session_start();
$_SESSION["id"]='stid';

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
<?php
$stuid=$_GET['id'];
$conn = mysqli_connect('localhost','root',"",'registration') or die("error");
$sql = "SELECT * FROM studenttable WHERE id=$stuid";
$result=mysqli_query($conn,$sql) or die("error");
if(mysqli_num_rows($result)>0)
{
  while ($rows=mysqli_fetch_assoc($result)){
    
 
  ?>
<form action="tableupdatedata.php" method="post">

<!-- <?php
$stu_id=$_GET['id'];
$conn = mysqli_connect('localhost','root',"",'registration') or die("error");
$sql = "SELECT * FROM studenttable WHERE id=$stuid";
$result=mysqli_query($conn,$sql) or die("error");
if(mysqli_num_rows($result)>0)
{
  while ($rows=mysqli_fetch_assoc($result)){
    
?> -->

  <div class="container">
    <h1>Update datar</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <input type="hidden"  name="id" value="<?php echo $rows['id'];?>" required><br>
    <label for="stid"><b>Student ID</b></label>
    <input type="text" placeholder="Enter Student ID" name="stid" value="<?php echo $rows['studentid'];?>" required><br>

    <label for="stname"><b>Student Name</b></label>
    <input type="text" placeholder="Enter Student Name" name="stname" value="<?php echo $rows['name'];?>" required><br>

    <label for="fname"><b>Father Name</b></label>
    <input type="text" placeholder="Enter Father Name" name="fname" value="<?php echo $rows['fathername'];?>"  required><br>

    <label for="nic"><b>Student NIC</b></label>
    <input type="text" placeholder="Enter Student NIC" name="nic" value="<?php echo $rows['nic'];?>" required><br>

    <label for="phoneno"><b>Student Phone Number</b></label>
    <input type="text" placeholder="Enter Student Phone Number" name="phoneno" value="<?php echo $rows['phoneNo'];?>" required><br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" value="<?php echo $rows['email'];?>" required><br>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" value="<?php echo $rows['adress'];?>"  required><br>

    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
    
  </div>
 
  <!-- <?php
  }
}
  ?> -->
</form> 
<?php  }
}
?>
</body>
</html>
<?php
print_r($_SESSION);
?>