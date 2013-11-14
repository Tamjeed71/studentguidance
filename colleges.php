<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>college guide</title>

	<link rel='stylesheet' type='text/css' href='css/indexstyle.css' />
	  	<script src='js/jquery-1.10.2.js'></script>
		<script src='js/jquery1-1.10.2.js'></script>
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.10.2.min.js'></script>
	<script type='text/javascript' src='js/slotmachine.js'></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/mycode1.js"></script>
	</head>	
<body>
  <?php

$con=mysql_connect("localhost","root","");
mysql_select_db("college",$con);
$result = mysql_query("select * from collegelist");
$color = "1";
	
?>
	<div id="alternative">
	<table border = '0' id="list" cellpadding="2" cellspacing='0' ><caption><b></b></caption><tr height='30px'><th>SLNO</th><th>College Name</th><th>Rank</th><th>Location</th></tr>
<?php
$count=1;
	while($row = mysql_fetch_array($result))
	{
		if($count==1)
		{
			echo "<tr  bgcolor='white' height='30px'><td align='center' width='10px'>" . $row[0] . "</td><td width='40%' ><a href=". $row[1] .">" . $row[1] ."</a></td><td><a href=" . $row[2] . ">". $row[2] ."</a></td><td id='list2'>" . $row[3] . "</td></tr>";
			$count=0;
		}
		else	
		{
			echo "<tr bgcolor='' height='30px'  ><td align='center' width='10px'>" . $row[0] . "</td><td width='40%' ><a href=" .$row[1]. ">" . $row[1] ."</a></td><td><a href=" . $row[2] . ">". $row[2] ."</a></td><td>" . $row[3] . "</td></tr>";
			$count=1;
		}
	}
	
	
	
	echo '</table>';
	mysql_close();

?>
</div>

</body>
</html>
        
    
      


