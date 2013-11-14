<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>college guide</title>
		<link rel='stylesheet' type='text/css' href='css/checkcolleg.css' />
     	<script src='js/jquery-1.10.2.js'></script>
		<script src='js/jquery1-1.10.2.js'></script>
		<script type='text/javascript' src='http://code.jquery.com/jquery-1.10.2.min.js'></script>
		<script type='text/javascript' src='js/slotmachine.js'></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/mycode.js"></script>
		<style type="text/css">
    </style>
</head>

<body>
<div class="container">
<div class="header">
    <h2>COLLEGE SELECTION GUIDE</h2>
    

    <span class="style3"></span></div>

	<div id="page-wrap" >

		<div id="slot-machine-tabs">

			<ul class="tabs">
				<li><a href="index.php#one">Home</a></li>
				<li><a href="index.php#two">Top 10 Colleges in Karnataka</a></li>
				<li><a href="index.php#three">Scholarships</a></li>
                <li><a href="index.php#four">Admissions</a></li>               
                <li><a href="index1.php">All Engineering Colleges</a></li>
               <div id="searchjs"> <li><input type="text"  class="search" id="team" placeholder="Search colleges" data-provide="typeahead" /></li></div>
			</ul>

			<div class="box-wrapper">
				              
                <div id="five" class="content-box">
					<div class="col-one col">
					<h2>Colleges which are best suits for your rank are<?php ?> </h2><br />
						<p align="justify" style="font-size:18px;">The rating which are showing in the box is based on the the number of student placed in last year and College-wise Alloted Seats through CEt exam conducted by kea.
							you can choice colleges showing below as per your rank or select better colleges ranks as we compare to your rank.
						</p>
					</div>
					<!--
					<div class="col-two col">
						
						<p align="justify" font-size="8px">The IT capital of India, Bangalore has various industries particularly in the field of electronics, software, and biotechnology. The state has more than 200 engineering colleges that feed the demand of technical personnel, mostly in the services sector.
						</p>
					</div>-->
					<div class="col-three col">
						
                       <table border="" id="rating">
                       <caption align="center">College Ratings</caption>
                       <tr id="rating" bgcolor="white"><td>AAA+</td><td>Outstanding</td></tr>
                       <tr id="rating"><td>AAA</td><td>sExcelent</td></tr>
                       <tr id="rating" bgcolor="white"><td>AA+</td><td>Very Good</td></tr>
                       <tr id="rating"><td>AA</td><td> Good</td></tr>
                       <tr id="rating" bgcolor="white"><td>A+</td><td>Average</td></tr>
                       <tr id="rating"><td>A</td><td>Okay!</td></tr>
                       </table>
                                     
                  </div>
				
                
              </div>  
                
  </div>
            

</div> <!-- END Box Wrapper -->

<?php

	$con=mysql_connect("localhost","root","");
	mysql_select_db("college",$con);
	
	
	$cate = $_POST['c'];
	$courses=$_POST['course1'];
	$rank1 = $_POST['r'];
$count=1;
   echo "<table  width='100%' margin-top='none'><caption></caption><tr  height='25px'><th width='40%' align='left'>College Name</th><th align='left'>Rank</th><th align='left'>Location</th></tr>";	
		
	if($rank1 >= 1 && $cate=='GM' && $rank1 <= 150 && $courses=='MCA')
	{
		
		$result = mysql_query("select * from collegelist WHERE sl_no >=1 AND sl_no <= 10 ");	
		while($row = mysql_fetch_array($result))
		{
		if($count==1){
			echo "<tr bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
			$count=0;
			}
			else{
			echo "<tr height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
			$count=1;
			}
		}
	}	
	else if($rank1 >= 151 && $cate=='GM' && $rank1 <= 300 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=3 AND sl_no <= 12 ");	
		while($row = mysql_fetch_array($result))
		{
			if($count==1)
			{
				echo "<tr bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
				$count=0;
			}
			else
			{
				echo "<tr height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
				$count=1;
			}
		}	
	}
	else if($rank1 >= 301 && $cate=='GM' && $rank1 <= 450 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=5 AND sl_no <= 14 ");	
		while($row = mysql_fetch_array($result))
		{
			if($count==1)
			{
				echo "<tr bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
				$count=0;
			}
			else{
				echo "<tr bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
				$count=1;
			}
		}
	}
	else if($rank1 >= 451 && $cate=='GM' && $rank1 <= 700 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=7 AND sl_no <= 16 ");	
		while($row = mysql_fetch_array($result))
		{
			if($count==1)
			{
				echo "<tr bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
				$count=0;
			}
			else
			{
				echo "<tr  height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
				$count=1;
			}
		}
	}
	else if($rank1 >= 701 && $cate=='GM' && $rank1 <= 1100 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=8 AND sl_no <= 17 ");	
		while($row = mysql_fetch_array($result))
		{
			if($count==1)
			{
				echo "<tr bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
				$count=0;
			}
			else
			{
				echo "<tr height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
				$count=1;
			}
		}
	
	}
	else if($rank1 >= 1101 && $cate=='GM' && $rank1 <= 1400 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=9 AND sl_no <= 18 ");	
		while($row = mysql_fetch_array($result))
		{
		if($count==1)
		{
			echo "<tr bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
			$count=0;
		}
		else{
			echo "<tr  height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
			$count=1;
			}
		}
	}
	
	else if($rank1 >= 1401 && $cate=='GM' && $rank1 <= 1800 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=11 AND sl_no <= 20 ");	
		while($row = mysql_fetch_array($result))
		{
		if($count==1)
		{
			echo "<tr bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
			$count=0;
		}
		else
		{
			echo "<tr height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
			$count=1;
		}
		}
	}
	
	else if($rank1 >= 1801 && $cate=='GM' && $rank1 <= 2200 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=14 AND sl_no <= 22 ");	
		while($row = mysql_fetch_array($result))
		{if($count==1){
		echo "<tr bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=0;
			}
			else
			{echo "<tr height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=1;
			}
			
		}
	}
	
	else if($rank1 >= 2201 && $cate=='GM' && $rank1 <= 2600 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=17 AND sl_no <= 26 ");	
		while($row = mysql_fetch_array($result))
		{
		if($count==1){
		echo "<tr bgcolor='white' height='28px'><<td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=0;
			}
			else
			{
		echo "<tr height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=1;
			}
		}
	}
	
	else if($rank1 >= 2600 && $cate=='GM' && $rank1 <= 3000 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=20 AND sl_no <= 30 ");	
		while($row = mysql_fetch_array($result))
		{if($count==1){
		echo "<tr bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=0;
			}
			else
			{
			echo "<tr height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=1;
			}
		}
	}
	
	else if($rank1 >= 3000 && $cate=='GM'  && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=22  ");	
		while($row = mysql_fetch_array($result))
		{if($count==1){
		echo "<tr bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=0;
			}
			else
			{echo "<tr  height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=1;
			}
		}
	}
	
	else if($rank1 >= 1 && $cate=='obc' && $rank1 <= 300 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=1 AND sl_no <= 10 ");	
		while($row = mysql_fetch_array($result))
		{if($count==1){
		echo "<tr bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=0;
			}
			else
			{
			echo "<tr height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=1;
			}
		}
	}
    else if($rank1 >= 301 && $cate=='obc' && $rank1 <= 600 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=4 AND sl_no <= 13 ");	
		while($row = mysql_fetch_array($result))
		{if($count==1){
		echo "<tr bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=0;
			}
			else
			{
			echo "<tr  height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=1;
			}
		}
	}	
	   else if($rank1 >= 601 && $cate=='obc' && $rank1 <= 900 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=7 AND sl_no <= 16 ");	
		while($row = mysql_fetch_array($result))
		{if($count==1){
		
		echo "<tr  bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=0;
			}
			else
			{echo "<tr  bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=1;
			}
		}
	}
	   else if($rank1 >= 901 && $cate=='obc' && $rank1 <= 1200 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=9 AND sl_no <= 19 ");	
		while($row = mysql_fetch_array($result))
		{if($count==1){
		echo "<tr  bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=0;
			}
			else
			{echo "<tr height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=1;
			}
		}
	}
	 else if($rank1 >= 1201 && $cate=='obc' && $rank1 <= 1600 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=11 AND sl_no <= 20 ");	
		while($row = mysql_fetch_array($result))
		{if($count==1){
		echo "<tr bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=0;
			}
			else
			{
			echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=1;
			}
		}
	}
	 else if($rank1 >= 1601 && $cate=='obc' && $rank1 <= 2000 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=14 AND sl_no <= 23  ");	
		while($row = mysql_fetch_array($result))
		{if($count==1){
		echo "<tr bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
			$count=0;
			}
			else
			{echo "<tr bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
			$count=1;
		}
	}
	}
	else if($rank1 >= 2001 && $cate=='obc' && $rank1 <= 2500 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=16 AND sl_no <= 25 ");	
		while($row = mysql_fetch_array($result))
		{if($count==1){
		echo "<tr bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=0;
			}
			else
			{echo "<tr bgcolor='white' height='28px'><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=1;
			}
		}
	}
	   else if($rank1 >= 2501 && $cate=='obc' && $rank1 <= 3000 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=19 AND sl_no <= 28 ");	
		while($row = mysql_fetch_array($result))
		{if($count==1){
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=0;
			}
			else
			{echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		$count=1;
			}
		}
	}
	   else if($rank1 >= 3001 && $cate=='obc'  && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=25");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	   else if($rank1 >= 1 && $cate=='sc' && $rank1 <= 300 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=1 AND sl_no <= 10 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	else if($rank1 >= 301 && $cate=='sc' && $rank1 <= 600 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=2 AND sl_no <= 11 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 601 && $cate=='sc' && $rank1 <= 1200 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=4 AND sl_no <= 13 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 1201 && $cate=='sc' && $rank1 <= 2000 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=5 AND sl_no <= 14 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 2001 && $cate=='sc' && $rank1 <= 3000 && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=6 AND sl_no <= 16 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 3001 && $cate=='sc'  && $courses=='MCA')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=10 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	else if($rank1 >= 1 && $cate=='GM' && $rank1 <= 500 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=1 AND sl_no <= 9 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 501 && $cate=='GM' && $rank1 <= 1000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=3 AND sl_no <= 12 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 1001 && $cate=='GM' && $rank1 <= 1500 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=5 AND sl_no <= 14 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 1501 && $cate=='GM' && $rank1 <= 2100 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=6 AND sl_no <= 16 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
		else if($rank1 >= 2101 && $cate=='GM' && $rank1 <= 3000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=8 AND sl_no <= 17 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	else if($rank1 >= 3001 && $cate=='GM' && $rank1 <= 4000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=10 AND sl_no <= 19 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 4001 && $cate=='GM' && $rank1 <= 6000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=14 AND sl_no <= 23 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	else if($rank1 >= 6001 && $cate=='GM' && $rank1 <= 9000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >= 18 AND sl_no <= 27 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 9001 && $cate=='GM' && $rank1 <= 12000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=23 AND sl_no <= 32 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 12001 && $cate=='GM' && $rank1 <= 15000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=28 AND sl_no <= 37 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 15001 && $cate=='GM' && $rank1 <= 18000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=34 AND sl_no <= 43 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 18001 && $cate=='GM' && $rank1 <= 21000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=35 AND sl_no <= 45 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	else if($rank1 >= 21001 && $cate=='GM' && $rank1 <= 24000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=40 AND sl_no <= 49 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	else if($rank1 >= 24001 && $cate=='GM' && $rank1 <= 28000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=45 AND sl_no <= 54 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	else if($rank1 >= 28001 && $cate=='GM' && $rank1 <= 31000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=50 AND sl_no <= 59 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	else if($rank1 >= 31001 && $cate=='GM' && $rank1 <= 35000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=55 AND sl_no <= 64 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 35001 && $cate=='GM' && $rank1 <= 40000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=60 AND sl_no <= 70 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 40001 && $cate=='GM' && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=50");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 1 && $cate=='obc' && $rank1 <= 2000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=1 AND sl_no <= 10 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 2001 && $cate=='obc' && $rank1 <= 5000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=6 AND sl_no <= 15 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	else if($rank1 >= 5001 && $cate=='obc' && $rank1 <= 9000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=10 AND sl_no <= 19 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 9001 && $cate=='obc' && $rank1 <= 13000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=12 AND sl_no <= 21 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 13001 && $cate=='obc' && $rank1 <= 17000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >= 16 AND sl_no <= 25 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 17001 && $cate=='obc' && $rank1 <= 20000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=21 AND sl_no <= 30 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	else if($rank1 >= 20001 && $cate=='obc' && $rank1 <= 24000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=26 AND sl_no <= 35 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	else if($rank1 >= 24001 && $cate=='obc' && $rank1 <= 28000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=31 AND sl_no <= 40 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	else if($rank1 >= 28001 && $cate=='obc' && $rank1 <= 32000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=35 AND sl_no <= 44 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	else if($rank1 >= 32001 && $cate=='obc' && $rank1 <= 36000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=40 AND sl_no <= 49 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	else if($rank1 >= 36001 && $cate=='obc' && $rank1 <= 40000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=46 AND sl_no <= 58 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	else if($rank1 >= 40001 && $cate=='obc' && $rank1 <= 44000 && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=58 AND sl_no <= 67 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	
	else if($rank1 >= 44001 && $cate=='obc'  && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=49  ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	
	else if($rank1 >= 1 && $cate=='sc' && $rank1 <= 3000   && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=1 AND sl_no <= 9   ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 3001 && $cate=='sc' && $rank1 <= 6000   && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=5 AND sl_no <= 14   ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
		else if($rank1 >= 6001 && $cate=='sc' && $rank1 <= 10000   && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=10 AND sl_no <= 19   ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 10001 && $cate=='sc' && $rank1 <= 15000   && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=15 AND sl_no <= 24 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}	
	else if($rank1 >= 15001 && $cate=='sc' && $rank1 <= 20000   && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=19 AND sl_no <= 28   ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 20001 && $cate=='sc' && $rank1 <= 25000   && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=24 AND sl_no <= 33   ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
		else if($rank1 >= 25001 && $cate=='sc' && $rank1 <= 30000   && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=26 AND sl_no <= 34   ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	else if($rank1 >= 30001 && $cate=='sc' && $rank1 <= 35000   && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=30 AND sl_no <= 39   ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 35001 && $cate=='sc' && $rank1 <= 40000   && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=35 AND sl_no <= 44   ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}	
	else if($rank1 >= 40001 && $cate=='sc' && $rank1 <= 45000   && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=42 AND sl_no <= 51   ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	else if($rank1 >= 45001 && $cate=='sc' && $rank1 <= 50000   && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=45 AND sl_no <= 54   ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
	
	else if($rank1 >= 50001 && $cate=='sc' && $courses=='BE')
	{
		$result = mysql_query("select * from collegelist WHERE sl_no >=50 ");	
		while($row = mysql_fetch_array($result))
		{
		echo "<tr><td>" . $row[1] ."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td></tr>";
		}
	}
//}
	echo "</table>";
	

?>
        
  <div class="footer">
    <h6 class="footer"> All copy rights are reserved</h6>
    
    </div>
    
</div>
</body>

</html>  
      


