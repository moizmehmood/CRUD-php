<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>A basic HTML table</h2>
<?php
        $conn = mysqli_connect('localhost','root',"",'registration') or die("error");
        $sql = "SELECT * FROM studenttable";
        $result=mysqli_query($conn,$sql) or die("error");
        if(mysqli_num_rows($result) > 0)
        {
        
      ?>
<table>

  <tr>
    <th>ID</th>
    <th>Student ID</th>
    <th>Name</th>
    <th>Father Name</th>
    <th>CNIC</th>
    <th>Phone NO</th>
    <th>Email</th>
    <th>Address</th>
    <th>Update/Delete</th>
  </tr>
  <?php
    while ($rows=mysqli_fetch_assoc($result))
    {
    
?>

  <tr>
    <td><?php echo $rows['id']; ?></td>
    <td><?php echo $rows['studentid']; ?></td>
    <td><?php echo $rows['name']; ?></td>
    <td><?php echo $rows['fathername']; ?></td>
    <td><?php echo $rows['nic']; ?></td>
    <td><?php echo $rows['phoneNo']; ?></td>
    <td><?php echo $rows['email']; ?></td>
    <td><?php echo $rows['adress']; ?></td>
    <td><a href='updatetable.php?id=<?php echo $rows['id']; ?>'>update</a>/
    <a href='delete-inline.php?id=<?php echo $rows['id']; ?>'>Delete</a>/<a href='adddata.php'>add</a></td>
  </tr>
  <?php } ?>
</table>

<?php } ?>
<a href="unsetsession.php">logout</a>;
</body>
</html>