<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>college guide</title>

		<link rel='stylesheet' type='text/css' href='css/style.css' />
		<script src='js/jquery-1.10.2.js'></script>
		<script src='js/jquery1-1.10.2.js'></script>
		<script type='text/javascript' src='http://code.jquery.com/jquery-1.10.2.min.js'></script>
		<script type='text/javascript' src='js/slotmachine.js'></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/mycode.js"></script>
		<style type="text/css">	</style>
		<script>
		/*	function validateRank()
			{
				if(("/^[0-9]+$/"))
					{
						alert("Rank should be a number ")
						return false;
					}
				else
				{
					return true;
				}
			}
			checkcollege.php<SCRIPT language=Javascript>
       
       function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : event.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
       	</script>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "checkcollege.php";
    };*/
</script>
	</head>

	<body>
      <div class="container">
		<div class="header">
			<h2>COLLEGE SELECTION GUIDE</h2>
				<span class="style3"></span></div>

					<div id="page-wrap">

						<div id="slot-machine-tabs">

							<ul class="tabs">
								<li><a href="#one">Home</a></li>
								<li><a href="#two">Top 10 Colleges in Karnataka</a></li>
								<li><a href="#three">Scholarships</a></li>
								<li><a href="#four">Admissions</a></li>               
								<li><a href="index1.php">All Engineering Colleges</a></li>
								<div id="searchjs"> <li><input type="text"  class="search" id="team" placeholder="Search colleges" data-provide="typeahead" /></li></div>
							</ul>
							<div class="box-wrapper">
								<div id="one" class="content-box">
									<div class="col-one col">
										<img src="images/Cmrit_logo.jpg" alt="" />
									</div>
									<div class="col-two col">
										<h3>Find Your Best Fit</h3>
										<p align="justify" font-size="10px">This application assists the students by providing needful information about colleges. And help them to select good colleges for their graduation. Each user can seek suggestions from us.  Students can mail us there reviews and comments once they are registered and logged in.
										The given list of engineering colleges below indicates the rank of each college in Karnataka.The ranking is based on the preference of each college by the students who have opted for the top 3 branches chosen according to preference.The ranking data is collected from the cut off ranks of the CET conselling which was done as KEA.</p>
									</div>
									<div class="col-three col">
										<form action="checkcollege.php" method="post" onsubmit="validateRank('r')">
											<p>Select College as per your PGCET rank.We will provide List of colleges where you will get sit as per your Rank.<br /></p><br/>
                                            <table class="rankhome" width="300px" height="130px" border="0px" style="border-style:solid; border-color:#000; border-width: middle; border-collapse:separate;" align="center" bordercolordark="#666666" bgcolor="#3a7b5f"> 
													<tr height="25px"><td>Select Category</td>
														<td width="161"><input type="radio" name="c" value="GM" />GM
																		<input type="radio" name="c" value="obc" />OBC
																		<input type="radio" name="c" value="sc"/> SC/SC</td></tr><br />
													<tr height="25px"><td>Select Course</td>
														<td width="161"><input type="radio" name="course1" value="BE" />BE
																		<input type="radio" name="course1" value="MCA" />MCA</td></tr><br />
													<tr height="25px"><td width="25">PGCET Rank</td><td><input type="text"  name="r" placeholder="Enter Youe PGCET Rank"/></td></tr>
														<?php //echo "<p class='note'>".$message_name."</P>"; ?>
														<?php //echo "<p class='note'>".$message_name1."</P>"; ?>
													<tr><td colspan=" 2" align="center"> <input type="submit" value="submit" /> </td></tr>
											</table>
											<!--
											<table class="rankhome" width="320px" height="140px" border="0px" style="border-style:solid; border-color:#000; border-width: middle; border-collapse:separate;" align="center" bordercolordark="#666666" bgcolor="#3a7b5f"> 
												<tr height="25px"><td>Select Category</td>
													<td width="161"><input type="radio" name="cat" value="GM" />GM
																	<input type="radio" name="cat" value="obc" />OBC
																	<input type="radio" name="cat" value="sc"/> SC/SC</td></tr><br />
												<tr height="25px"><td>Select Course</td>
													<td width="161"><input type="radio" name="course1" value="BE" />BE
													<input type="radio" name="course1" value="MCA" />MCA</td></tr><br />
													<tr height="25px"><td width="125">PGCET Rank</td>
													<td><input type="text"  name="rank" placeholder="Enter Youe PGCET Rank "/></td></tr>
												<tr><td colspan=" 2" align="center"> <input type="submit" value="submit" /></td></tr>
											</table>-->
										</form>                  
                    				</div>
								</div>           
								<div id="four" class="content-box">
									<div class="col-one col">
										<h3>Admission </h3>
											<p align="justify"> Fill the form to take admission in top colleges.
												If you not attended the CET exam don,t worry, we will help you to take admission in good reputted college.
												just you need to fill the form so we can directly submit your application to colleges.                  </p>
									</div>
									<div class="col-two col">
										<form class="admis" action="admission.php" method="post">
											<table width="290px">
												<tr ><td>First Name:</td><td><input type="text" name="fname"/> </td></tr>                      
												<tr height="30px"><td>Last Name:</td><td><input type="text" name="lname"/></td></tr>
												<tr height="30px"><td>Male/Female:</td><td><input type="radio" name="sex" value="male" />Male
																							<input type="radio" name="sex" value="female">Female</td></tr>
												<tr height="30px"><td colspan="2">Course Completed  :<select class="course" name="course1">
																										<option>select</option>
																										<option>BE</option>
																										<option>BCA</option>
																										<option>10+2</option>
																										<option>BSC</option>
																									</select></td></tr>
												<tr height="30px"><td colspan="2">Exam appeared:<select name="exam1" >
																								<option>select</option>
																								<option>CET</option>
																								<option>Non-CET</option></select> </td></tr><tr height="30px">
												<td colspan="2">Marks:<input type="text" name="marks1"/>%</td></tr>
                                            </table>
									</div>
									<div class="col-three col">
										<table width="260px">
											<tr height="30px"><td>Date of Birth</td><td><input type="text" name="dob"/></td></tr>
											<tr height="3opx"><td>email-id:</td><td><input type="text" name="email"/></td></tr>                        
											<tr height="30px"><td>contact number:</td><td><input type="text" name="cnumber"/></td></tr>
											<tr height="30px"><td>Type college</td><td><input type="text" name="cname"  placeholder="Which College You want to Join" /></td></tr>
											<tr height="30px"><td>college code</td><td><input type="text" name="code"/></td></tr>
											<tr height="30px"><td>Address</td><td><input type="text" name="adres"/></td></tr>
											<tr height="30px"><td colspan="2">Submit application:<input type="submit"  value="Submit" border="1px" border-radius="4px" /></td></tr>
										</table>
										</form>                                  
                    
									</div>
								</div>

                
								<div id="five" class="content-box">
									<div class="col-one col">
										<img src="images/Cmrit_logo.jpg" alt="" />
									</div>
									<div class="col-two col">
									</div>
									<div class="col-three col">
									</div>
								</div>  
                				<div id="two" class="content-box">
									<div class="col-one col">
										<h3 id="tt">Top 10 Colleges</h3>
										<table class="top10" align="left">
												<tr><td><hr></td></tr>
												<tr> <td id="bms" align="left" class="hide3"><label id="hide" >BMS College of Engineering<hr></label></td></tr>
												<tr> <td id="rv" class="hide3">RV College of Engineering</a><hr></td></tr>
												<tr> <td id="pes" class="hide3"> PES Institute of Technology</a><hr></td></tr>
												<tr> <td id="bit" class="hide3">Bangalore Institute of Technology</a><hr></td></tr>
												<tr> <td id="ms" class="hide3">M.S. Ramaiah Institute of Technology</a><hr></td></tr>
												<tr><td id="ait" class="hide3">Dr. Ambedkar Institute of Technology<hr></td></tr>
												<tr><td id="bmsit" class="hide3">BMS Institute of Technology<hr /></td></tr>
												<tr><td id="sit" class="hide3">Siddaganga Institute of Technology<<hr /></td></tr>
												<tr><td id="rnsit" class="hide3">RNS Institute of Technology<hr /></td></tr>
												<tr><td id="sjc" class="hide3">S J College of Enginee<hr /></td></tr>
                                            </table>
									</div>
									<div class="col-two col">
										<span id="bms2" class="hide2"><br><br><img src="images/bms.jpg" alt="" /></span>
										<span id="rv2" class="hide2"><br><br><img src="images/rv.jpg" alt="" /></span>
										<span id="pes2" class="hide2"><br><br><img src="images/pes.jpg" alt="" /></span>
										<span id="bit2" class="hide2"><br><br><img src="images/bit.jpg" alt="" /></span>
										<span id="ms2" class="hide2"><br><br><img src="images/ms.jpg" alt="" /></span>
										<span id="ait2" class="hide2"><br><br><img src="images/ait.jpg" alt="" /></span>
										<span id="bmsit2" class="hide2"><br><br><img src="images/bmsit.jpg" alt="" /></span>
										<span id="sit2" class="hide2"><br><br><img src="images/sit.jpg" alt="" /></span>
										<span id="rnsit2" class="hide2"><br><br><img src="images/rnsit.jpg" alt="" /></span>
										<span id="sjc2" class="hide2"><br><br><img src="images/sjc.jpg" alt="" /></span>
											
									</div>
									<div class="col-three col">
                                  		  <span id="bms1" class="hide1"><h4>About B.M.S College of Engineering</h4><br><p align="justify"><p> The B. M. Sreenivasaiah College of Engineering, is one of the most reputed engineering college in Bangalore, Karnataka, India. The college started was one of the first private sector initiatives in technical education in India. It is located on the Bull Temple Road, opposite to the famous Bull Temple. Though a private engineering college, it is partially funded by the Government of Karnataka. It has the largest student population of engineering colleges in Karnataka, drawing students from other states of India and abroad more information<a href="http://www.bmsce.in/‎">click here</a>.</p> 
										  </span>
										  <span id="rv1" class="hide1"><h4>About R.V. College of Engineering</h4><br><p align="justify">R.V. College of Engineering is an engineering college located in Bangalore. RCVE rated one amongst the top ten self-financing Engineering institutions in the country. The college provides an ideal ambience to stimulate the teaching-learning process, helping in bringing out skilled and disciplined Engineers. Now RVCE plans to rapidly expand its R & D footprint and industry academic collaboration. Towards this RVCE has set a vision “To Be a Global Leader in Quality Technical Education, Research, & Innovation through Team Work more information <a href="http://www.rvce.edu.in/index.php">click here</a>.</p>
										  </span>
										  <span id="pes1" class="hide1"><h4>PES Institute of Technology</h4><br><p align="justify">PESIT was started as the first engineering college under the PES group of institutions. Its vision has been to make its students professionally superior and ethically strong global manpower. Every activity at PES is focused in addressing student needs. It offers and facilitates academic excellence, leadership qualities, nurturing environment, and cutting edge infrastructure - everything students need to succeed. A unique educational system at PES will ensure that students gain not just depth, more information <a href="http://www.pes.edu/">click here</a>.</p>
										  </span>
										    <span id="bit1" class="hide1"><h4>Bangalore Institute of Technology</h4><br><p align="justify">BIT is currently placed as the best college affiliated to VTU.[citation needed] The institute initially offered the Bachelor of Engineering degrees in Computer Science, Electronics, Telecommunication, Instrumentation Technology, Electrical, Civil and Mechanical, Information Science and Engineering, Industrial Engineering and Management. Bangalore Institute of Technology was the first institute to introduce a full-fledged Computer Science and Engineering course in Karnataka more information<a href="http://bit-bangalore.edu.in/">click here</a>.</p>
										  </span>
										    <span id="ms1" class="hide1" ><h4>M.S. Ramaiah Institute of Technology</h4><br><p align="justify">M S Ramaiah Institute of Technology has carved out for itself a big name all over the country and is recognized as a premier educational institution in India. MSRIT is an autonomous institution affiliated to the Visvesvaraya Technological University. It offers courses approved by the All India Council for Technical Education, AICTE, New Delhi and it is affiliated to the Visveswaraiah Technological University, Belgaum. more information<a href="http://www.msrit.edu/‎">click here</a>.</p>
										  </span>
										    <span id="ait1" class="hide1"><h4>Sir M Visvesvaraya Institute of Technology</h4><br>	<p align="justify">Sir M. Visvesvaraya Institute of Technology Bangalore is affiliated to Visvesvaraya Technological University and approved by All India Council for Technical Education, New Delhi and is accredited by National Board of Accreditation, New Delhi. Sir MVIT is an ISO 9001:2000 Certified Institution. more information<a href="http://www.sirmvit.edu/">click here</a>.</p>
										  </span>
										    <span id="bmsit1" class="hide1"><h4>BMS Institute of Technology</h4><br><p align="justify">BMS Institute of Technology is affiliated to Vishwevaraiah Technological University. The college offers Bachelor of Engineering Courses. College mission is to emerge as one of the Nation's finest institutions in the field of technical education and research through focused, effective and sustained monitoring of its programmes and resources. more information<a href="http://www.bmsit.org.in/">click here</a>.</p>
										  </span>
										    <span id="sit1" class="hide1"><h4>Siddaganga Institute of Technology</h4><br><p align="justify">Siddaganga Institute Of Technology is affiliated to Vivesvarya Technological University, Belgaum. The institute offers Technology programs. The Institute is one of the 14 Engineering Colleges under the Technical Education Quality Improvement Programme (TEQIP) a World Bank Project, administered by the Government of Karnataka in the state and is granted Academic Autonomy from the Year 2007-08. more information<a href="http://www.sit.ac.in/‎">click here</a>.</p>
										  </span>
										    <span id="rnsit1" class="hide1"><h4>RNS Institute of Technology</h4><br><p align="justify">RNS Institute of Technology is affiliated to Visvesvaraya Technological University and apprved by AICTE. Institute offers Bachelor of Engineering, Master of Technology, MBA and MCA courses. more information<a href="http://www.rnsit.ac.in/">click here</a>.</p>
										  </span>
										    <span id="sjc1" class="hide1"><h4>Sri Jayachamarajendra College of Enginee</h4><br><p align="justify">Sri Jayachamarajendra College of Engineering (often shortened to SJCE) is a private technical co-educational college located in Mysore, Karnataka, India. Established in 1963, SJCE has 12 departments in engineering, a Master of Computer Applications department and Biothechnology department. It is affiliated to the Visvesvaraya Technological University, Belgaum. The undergraduate courses are granted academic autonomy by the university more information<a href="http://sjcemysore.org/index.aspx">click here</a>.</p>
										  </span>
									</div>
								</div>

									<div id="three" class="content-box">
										<div class="col-one col">
											<img src="images/scholarship.jpg" alt="" />
										</div>
									<div class="col-two col">
										<h3>Schoolarships</h3>
											<table class="top10">
												<tr><td><span id="prize">Uttejana - Prize Money <hr/></span></td></tr>
												<tr><td><span id="merit">Merit-Cum-Means Scholarship Scheme <hr /></span></td></tr>
												<tr><td><span id="post1">POST MATRIC Scholarship Scheme<hr /></span></td></tr>
												<tr><td id="karna">Karnataka Schoolarship<hr /></td></tr>
												<tr><td><span id="loan1">Govt Education Loan Scheme<hr /></span></td></tr>
                        					</table>
									</div>
									<div class="col-three col">
										<span id="utteja">
												Those who complete S.S.L.C. & take admission to 1st year PUC - Rs.3,000/- per year. ( 2nd PUC Students are not eligible )
												Those who complete PUC-II & take admission to degree courses Rs.4,000/- per year.
												Those who complete any degree and take admission to post Graduate Rs.5,000/- per year.<a href="http://www.gokdom.com/uttejana.html"><h6>more Details</h6></a>
										</span>
											</p><span id="utteja1">
												The Student should have scored more than 50% marks in the last Qualifying Exam &also more than 50% marks in the previous semester / year final examination and should have no back logs till date.
												The Qualifying Exam (QE) % : For UG Students - Overall Percentage in 2nd PUC / 12th. For PG Students – Aggregate % of all Semesters / Years of UG Course Studied.
												Annual Income of the student’s Parents/Guardians from all sources should not exceed Rs. 2.5 lakh.
												<a href="www.momascholarship.gov.in">Click here</a> to apply Online.</span></p>
										
										<span id="loan">
										<p>
												Under this scheme, minority students who are desirous of pursuing professional courses like
												Medical, Engineering, Dental, Master Degree Courses, Diploma Courses, Nursing, B.Ed, BBM, BCA, D.Ed, 
												and ITI are provided financial Assistance from Rs.5,000/- to Rs.50,000/- per year till the completion of the course as loan.
											    The loan has to be repaid by the beneficiary after one year of completion of the course @ 2% interest P.A. 
												<a href="http://kmdc.kar.nic.in/Arivu.html">Click here</a> to apply Online.</p>
										</span>
												<p>
												<span id="post">
												 Objective -The objective of the scheme is to award scholarships to meritorious students belonging to
												economically weaker sections of minority community so as to provide them better opportunities for higher education, 
												increase their rate of attainment in higher education and enhance their employability  <a href="http://164.100.167.13/postmatric/">Click here</a> to apply.</p>	
						                </span>
											<p>
										<span id="merit1">

										</span>	</p>

<?php
/*/ define variables and set to empty values
	$emailErr  = "";
	$email =  "";
	if (empty($_POST["email"])){
		$emailErr = "Email is required";
		}
		else
		{
		$email = test_input($_POST["email"]);
			// check if e-mail address syntax is valid
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
			$emailErr = "Invalid email format"; 
       }
     }
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}*/
?>

                     
											<h4>Get Connected with us through email-id to get updates of all scholorships.</h4><br />
											Enter Your Email-id Here<br />
											<form action="aa.php" method="post" ><span class="error"></span>
													<input type="text" name="Email1" /><br/>
													<input type="button" name="aa" id="go" value="submit"/>
													<input type="submit" value="submit"/>
													<div id="sch">				  
													</div>
											</form>          
									</div> 
								</div>
						</div>
            </div> <!-- END Box Wrapper -->
		</div> <!-- END Slot Machine Tabs style="display:none;" -->
	<!-- <div id="show">
			<div id="coll" >
  <?php include 'colleges.php'; ?>
    </div>
        </div>-->
    
				<div class="footer">
					<h6 class="footer"> All copy rights are reserved</h6>
				</div>
			</div>
	</body>

</html>