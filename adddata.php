<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="updatedatatable.php" method="post">

  <div>
    <h1>Update datar</h1>
    
    <hr>
    <!-- <input type="hidden"  name="id" value="<?php echo $rows['id'];?>" required><br> -->
    <label for="stid"><b>Student ID</b></label>
    <input type="text" placeholder="Enter Student ID" name="stid" required><br>

    <label for="stname"><b>Student Name</b></label>
    <input type="text" placeholder="Enter Student Name" name="stname" required><br>

    <label for="fname"><b>Father Name</b></label>
    <input type="text" placeholder="Enter Father Name" name="fname" required><br>

    <label for="nic"><b>Student NIC</b></label>
    <input type="text" placeholder="Enter Student NIC" name="nic" required><br>

    <label for="phoneno"><b>Student Phone Number</b></label>
    <input type="text" placeholder="Enter Student Phone Number" name="phoneno" required><br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required><br>

    <button type="submit" class="updatebtn">Update</button>
</div>
</form> 
</body>
</html>