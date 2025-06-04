<?php

error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
	$message=$_SESSION['message'];

	echo "<script type='text/javascript'> 

	alert('$message');




	 </script>";
}




?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CSC SVG</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="images.jpg">
	<link rel="icon" href="images.jpg">
	
	

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<style type="text/css">



body 
{
  font-family: 'Poppins', sans-serif;
  font-size: 20px;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
.our
{
	text-decoration: underline;
}
.wel
{
	width: 350px;
	height: 590px;
}



</style>




<body>


	<nav>
		<img src="images.jpg" width="100">
	<ul>
			
			<button><a href="index.php">Home</a></button>
			<button><a href="contact.php">Contact</a></button>
			<button><a href="admission_form.php">Admission</a></button>
			<li><a href="login.php" class="btn btn-success">Login</a></li>
		</ul>
	</nav>
	<div class="section1">
		<label class="img_text">WE TEACH STUDENTS WITH CARE</label>
		<img class="main_img" src="school_management.jpeg">
	
	</div>
	<div class="container">
		<div class="row">
			
		<div class="col-md-4">
			<img class="wel" src="school 2.jpg">
			
		</div>
		<div class="col-md-8">
			<h1 class="our">Welcome to CSC Sivaganga</h1>

			<br><br>

			<h4><b>CSC Computer Education Private Limited (CSCCEPL), Chennai is a 22 Years old Training Institute with over 375 Centers in South India and Srilanka.

			CSC Computer Education is known for its quality Computer Education and is recognized as a leader in providing IT training. It is an ISO 9001:2000 certified institute.

			CSC commit wholeheartedly to satisfy the customer expectations as well as to continually improve the effectiveness of the Quality Management System through planned efforts and involvement of all personnel.</b></h4>
          

          <h3><h3 class="our">VISION:-</h3>
			
			
			"The vision of the institute is to be in the forefront of Computer Education and make emerging technologies reach the major segment of the society and providing quality education across 1 billion Indian populations."</h3>
          
          
          <h3><h3 class="our">MISSION:-</h3>
			
			
			"Their mission is to open the floodgates of Career Opportunity to everybody. As a part of its mission, it intends to take computers to the remotest corner of the Tamil Nadu and slowly & steadily in rest of India."</h3>
          
			
			<br><br>

			<h3><b>Sivaganga CSC is one of the branch of CSC.
		     it is running since 30 years.</b>
		 </h3> 
	
			
		</div>
	</div>
	</div>
	<br><br>
	<br><br>
	<center>
		<h1 class="our">Head of the sivaganga branch </h1>
	</center>
	<div class="container">
		<div class="row">
			

			<div class="col-md-4">

				<img class="teacher" src="W.png">
				
					</div>
			<div class="col-md-4">

				<img class="teacher" src="h.jpg">
				<center><h2><b>Mr. Bose,M.sc.</b></h2></center>

			</div>
				
		</div>

			
	<center>

		<br><br>

	<center>
		<h1 class="our">Founder of CSC</h1>
	</center>
	<div class="container">
		<div class="row">
			

			<div class="col-md-4">

				<img class="teacher" src="W.png">
				
					</div>
			<div class="col-md-4">

				<img class="teacher" src="f.jpg">
				<h2><b>Late Mr. AYYAMPERUMAL,M.sc.</b></h2>

			</div>
				
		</div>

			
	<center>

		<br><br>

		<h1 class="our">Our Main Courses</h1>
	</center>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="courses" src="web.jpeg">
				<h3><b>Web Development</h3></b>
			</div>

			<div class="col-md-4">

				<img class="courses" src="fu.jpg">
				<h3><b>Full Stack Developer</h3></b>
				
			</div>

			<div class="col-md-4">

				<img class="courses" src="hd.jpg">
				<h3><b>Honours Diploma In Computer Programming </h3></b>
			</div>
		</div>
		
	</div>

	<br><br>

	<h3><b>For any clarification / assistance,you shall <a href="contact.php">contact us </a> (9:00 AM to 5:00 PM) or<br> shall reach us at <a href="https://mail.google.com/mail/u/0/#inbox?compose=new">cscsvg551@gmail.com</a></b></h3>
	

	



	<br><br>

	<footer>
			<h4 class="footer_text">copyright &copy; 2023 CSC.All rights are reserved.</h4>
	</footer>

<button onclick="topFunction()" id="myBtn" title="Go to top">^</button>



<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>




</body>
</html> 