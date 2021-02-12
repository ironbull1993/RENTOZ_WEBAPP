<?php
include 'db.php';
if(!empty($firstname)) {
  $firstname = addslashes($firstname);
  $lastname = addslashes($lastname);
  $phone = addslashes($phone);
  $email = addslashes($email);}
  
  $sql="INSERT INTO users (firstname,lastname,phone,email)
VALUES
('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['phone']."','".$_POST['email']."')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
<html>
<body>
  <a href= "index.php"><button>home</button></a>
  <a href= "data.html"><button>add data</button></a>
</body>

</html>