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

  </tr>

<?php

include "db.php"; // Using database connection file here
$idd = $_GET['id'];
$records = mysqli_query($conn,"select * from users where id='$idd'"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['firstname']; ?></td>
    <td><?php echo $data['lastname']; ?></td>    
    <td><?php echo $data['phone']; ?></td>    
    <td><?php echo $data['email']; ?></td>    
    
  </tr>	
<?php
}
?>
</table>

  
  
</body>
</html>


<?php

include "db.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"select * from users where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update1'])) // when click on Update button
{
    $firstname = $_POST['firstname'];
   // $age = $_POST['age'];
	
    $edit = mysqli_query($conn,"update users set firstname='$firstname' where id='$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:record.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "Error updating record: " . mysqli_error($conn);
        mysqli_close($conn);
    }    	
}

if(isset($_POST['update2'])) // when click on Update button
{
    $lastname = $_POST['lastname'];
   // $age = $_POST['age'];
	
    $edit = mysqli_query($conn,"update users set lastname='$lastname' where id='$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:record.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "Error updating record: " . mysqli_error($conn);
        mysqli_close($conn);
    }    	
}

if(isset($_POST['update3'])) // when click on Update button
{
    $phone = $_POST['phone'];
   // $age = $_POST['age'];
	
    $edit = mysqli_query($conn,"update users set phone='$phone' where id='$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:record.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "Error updating record: " . mysqli_error($conn);
        mysqli_close($conn);
    }    	
}

if(isset($_POST['update4'])) // when click on Update button
{
    $email = $_POST['email'];
   // $age = $_POST['age'];
	
    $edit = mysqli_query($conn,"update users set email='$email' where id='$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:record.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "Error updating record: " . mysqli_error($conn);
        mysqli_close($conn);
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST" >
  <input type="text" name="firstname"  placeholder="Enter new firstname" >

  <input type="submit" name="update1" value="Update">
</form>

<form method="POST" >
  <input type="text" name="lastname"  placeholder="Enter new lastame" >

  <input type="submit" name="update2" value="Update">
</form>

<form method="POST">
  <input type="text" name="phone"  placeholder="Enter new phone" >

  <input type="submit" name="update3" value="Update">
</form>

<form method="POST">
  <input type="text" name="email"  placeholder="Enter new email" >

  <input type="submit" name="update4" value="Update">
</form>

<a href= "record.php"><button>finish</button></a><br>