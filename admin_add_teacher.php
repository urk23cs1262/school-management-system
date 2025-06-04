<?php

session_start();

if(!isset($_SESSION['username']))
{
	header("location:login.php");
}
elseif($_SESSION['usertype']=='student')
{
	header("location:login.php");
}


$host="localhost";
$user="root";
$password="";
$db="schoolproject";



$data=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_teacher']))
{
	$t_name=$_POST['name'];
	$t_gender=$_POST['gender'];
	$t_qualification=$_POST['qualification'];
	$t_description=$_POST['description'];
	$t_phone=$_POST['phone'];


	$sql="INSERT INTO teacher (name,gender,qualification,description,phone) VALUES('$t_name','$t_gender','$t_qualification','$t_description','$t_phone')";

	$result=mysqli_query($data,$sql);

	if($result)
	{
		header('location:admin_add_teacher.php');
	}


}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

	<style type="text/css">
		

		.div_deg
		{
			background-color: skyblue;
			padding-top: 70px;
			padding-bottom: 70px;
			width: 500px;
			 font-weight: bold;
		}

		label
		{
			display: inline-block;
			text-align: right;
			width: 100px;
			padding-top: 10px;
			padding-bottom: 10px;
			text-align: center;
			 font-weight: bold;
		
		}
		



	</style>
	
	<?php

	include 'admin_css.php';


	?>
</head>
<body>
	<?php

	include 'admin_sidebar.php';



	?>

	<div class="content">
		<center>
		<h1>Add Teacher</h1>

		<br><br>


		<div class="div_deg">
			


			<form action="#" method="POST" enctype="multipart/form-data">
				
				<div>
					<label>Name</label>
					<input type="text" name="name">
				</div>

				<br>

				<div>

					<b><p>Gender</p></b>

					<input type="radio" id="gender" name="gender" value="Male">
					<label="gender"><b>Male</b></label>

					<input type="radio" id="gender" name="gender" value="Female">
					<label="gender"><b>Female</b></label>

					<input type="radio" id="gender" name="gender" value="Others">
					<label="gender"><b>Others</b></label>





					</div>

				<br>

				<br>

				<div>
					<label>Qualification</label>
					<input type="text" name="qualification">
				</div>

				<br>

				<br>

				<div>
					<label>Description</label>
					<textarea name="description"></textarea>
				</div>

				<br>

				<br>

				<div>
					<label>Phone</label>
					<input type="number" name="phone">

				</div>

				<br>

				
				<div>
					
					<input class="btn btn-primary" type="submit" name="add_teacher" value="ADD TEACHER">
				</div>


			</form>
		</div>











	</center>
		

	</div>
</body>
</html>