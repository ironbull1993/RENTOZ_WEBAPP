<?php
include "conn.php";
$nme= $_POST['fullname'];


$age= 2017-$_POST['birth_yr'];
$sql="INSERT INTO coict_student (fullname,passwrd,birth_yr,birth_month,gender,country,age)
VALUES
('".$_POST['fullname']."','".$_POST['passwrd']."','".$_POST['birth_yr']."','".$_POST['birth_month']."','".$_POST['gender']."','".$_POST['country']."','$age')";
$sql1="SELECT * FROM coict_student where fullname='$nme'";

if ($conn->query($sql) === TRUE) {
  $res=mysqli_query($conn,$sql1);
  $string="";
  while($row=$res->fetch_assoc()){
      $string .= $row['fullname'].",";$string .=$row['passwrd'].","; $string .=$row['birth_yr'].",";$string .=$row['birth_month'].",";$string .=$row['gender'].",";$string .=$row['country'].",";$string .=$row['age']."\n";
  }
  file_put_contents("RegInfo.dat",$string,FILE_APPEND);

  //SELECT * FROM coict_student INTO OUTFILE '/root/Desktop/webapp/RegInfo.dat' FIELDS TERMINATED BY ',';
  // $edt=fopen('RegInfo.dat','a');
//fwrite($edt,$res);
//fclose($edt);
 //if ($conn->query($sql1) === TRUE) {
  ?>
<html>
<title>Registered information</title>
<style>


h1{ width: 50%;
    margin: auto ;
    
    background: white;
    text-align: center;
    border: 1px hidden #B0C4DE;
    border-bottom:none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
    -webkit-border-radius: 10px 10px 0px 0px;
    -moz-border-radius: 10px 10px 0px 0px;
    -ms-border-radius: 10px 10px 0px 0px;
    -o-border-radius: 10px 10px 0px 0px;

}
.regst{
     width: 50%;
     margin: auto;
     padding: 20px;
     background: hidden;
     border: 1px solid green ;
     border-radius: 0px 0px 10px 10px;
    
} 

.btn{

width: 50%;
 margin: auto;
 padding: 10px;
 background: white;
 border: 1px hidden ;
 border-radius: 0px 0px 10px 10px;
}
</style>


<body>


  <h1 ><b>REGISTRED INFORMATION </b></h1>
  <div class="regst">
  <span>Fullname:</span> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_POST['fullname'];?> <br><br>
  <span>Password:</span>&nbsp;&nbsp; &nbsp;&nbsp;<?php echo $_POST['passwrd'];?> <br><br>
  <span>Birth month:</span>&nbsp;<?php echo $_POST['birth_month'];?> <br><br>
  <span>Birth year:</span> &nbsp;&nbsp;&nbsp;<?php echo $_POST['birth_yr'];?> <br><br>
  <span>Age:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $age;?> <br><br>
  <span>Gender:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST['gender'];?> <br><br>
  <span>Country:</span>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<?php echo $_POST['country'];?> 
</div>
<div class="btn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href= "index.html"><button>DONE</button></a><br></div>
  </body>
  </html>
    
   <?php
  } 
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>

