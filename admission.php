<?php
$con=mysqli_connect("localhost","root","","college");
// Check connection
if (mysqli_connect_errno())
  { 
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  //$slno=$_POST[sl_no];
//$fname=$_POST[fname];
$sql="INSERT INTO admission (Fname,Lname,Gender,Coursecompleted,Exam,marks,dob,email_id,contact,S_college,address,c_code) VALUES('$_POST[fname]','$_POST[lname]','$_POST[sex]','$_POST[course1]','$_POST[exam1]',$_POST[marks1],$_POST[dob],'$_POST[email]',$_POST[cnumber],'$_POST[cname]','$_POST[adres]',$_POST[code])";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "will get bach to you, if any new scholarship is available";

?>
