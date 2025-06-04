<link rel="stylesheet" type="text/css" href="style.css">


<style type="text/css">




.admission_txt
{
	width: 30%;
	height: 120px;
	border-radius: 25px;
	border: 1px solid blue;
	font-weight: bold;
	font-family: 'Poppins', sans-serif;
}

.admission_form
{
	display: inline-block;
	width: 100px;
	text-align: right;
	padding-right: 10px;
	font-weight: bold;
	font-family: 'Poppins', sans-serif;
	
}
.adm_int
{
	padding-top: 10px;
}
.adm
{
	padding-top: 30px;
	padding-bottom: 30px;
	color: black;
	text-align: center;
	font-weight: bold;
	width: 400px;
	font-size: 35px;
	font-family: 'Poppins', sans-serif;
	
}
.admission_deg
{
	width: 30%;
	height: 40px;
	border-radius: 25px;
	border: 1px solid blue;
	font-family: 'Poppins', sans-serif;
	
}

</style>

<body>
<center>

		<br><br>

		<h1 class="adm">Admission Form</h1>
	</center>
	<div align="center">
		
		<form action="data_check.php" method="POST">
			
			<div class="adm_int" >
				<label class="admission_form">Name</label>
				<input class="admission_deg" type="text" name="name">
			</div>
			<div class="adm_int">
				<label class="admission_form">Email</label>
				<input class="admission_deg" type="text" name="email">
			</div>
			<div class="adm_int">
				<label class="admission_form">Phone</label>
				<input class="admission_deg" type="text" name="phone">
			</div>
			<div class="adm_int">
				<label class="admission_form">Message</label>
				<textarea class="admission_txt" name="message"></textarea>
			</div>
			<div class="adm_int">
				
				<input style=" font-weight: bold;" class="btn btn-primary" id="submit" type="submit" name="apply" value="Apply" >


				<br><br>


				<h4><b>"WE LOOK FORWARD YOU IN OUR CENTER"</b></h4>

				<br>



				<h3><a class="btn btn-danger" href="index.php">Go To Home Page</a></h3>


			</div>
		</form>

	</div>
</body>