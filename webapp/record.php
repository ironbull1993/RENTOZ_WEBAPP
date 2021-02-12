<!DOCTYPE html>
<html>
<head>
  <title>Display all records</title>
</head>
<body>

<h2> Details</h2>

<table border="2">
  <tr>
    <td>id</td>
    <td>firstname</td>
    <td>lastname</td>
    <td>phone</td>
    <td>email</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

include "db.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from users"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['firstname']; ?></td>
    <td><?php echo $data['lastname']; ?></td>    
    <td><?php echo $data['phone']; ?></td>    
    <td><?php echo $data['email']; ?></td>    
    <td><a href="edt.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete2.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

  <a href= "index.php"><button>home</button></a><br>
  
</body>
</html>
