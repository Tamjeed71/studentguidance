

<?php
$con=mysqli_connect("localhost","root","","college");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO schoolarship (email)
VALUES
('$_POST[Email1]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "will gret bach to you, if any new scholarship is available";

?>

