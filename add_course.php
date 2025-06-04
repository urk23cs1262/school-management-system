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

if(isset($_POST['add_course']))
{
	$coursename=$_POST['coursename'];
	$coursefee=$_POST['coursefee'];
	$subjects=$_POST['subjects'];
	$duration=$_POST['duration'];
	
	

	$check="SELECT * FROM course WHERE coursename='$coursename'";

	$check_user=mysqli_query($data,$check);

	$row_count=mysqli_num_rows($check_user);

	if($row_count==1)

	{

		echo "<script type='text/javascript' > 

		alert('coursename Already Exist. Try Another one');

		</script>";


		}

	else
	{


	$sql="INSERT INTO course(coursename,coursefee,subjects,duration) VALUES ('$coursename','$coursefee','$subjects','$duration')";


	$result=mysqli_query($data,$sql);


	if($result)
	{
		echo "<script type='text/javascript' > 

		alert('Data Uploaded successfully');

		</script>";
	}

	else
	{
		echo "Data Upload Failed";
	}
}
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

	<style type="text/css">
		
		label
		{
			display: inline-block;
			text-align: right;
			width: 100px;
			padding-top: 10px;
			padding-bottom: 10px;
			 font-weight: bold;
		}

		.div_deg
		{
			background-color: skyblue;
			width: 400px;
			padding-top: 70px;
			padding-bottom: 70px;
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

		<h1>Add courses</h1>
		
		<br><br>

		<div class="div_deg">
			<form action="#" method="POST">
				
				<div>
					
					<label>Course Name</label>
					<input type="text" name="coursename">

				</div>

				<div>
					
					<label>Course Fee</label>
					<input type="text" name="coursefee">

				</div>

				<div>
					
					<label>Subjects</label>
					<input type="text" name="subjects">

				</div>

				<div>
					
					<label>Duration</label>
					<input type="text" name="duration">

				</div>


				<div>
					
					
					<input type="submit" class="btn btn-primary" name="add_course" value="Add course">

				</div>



			</form>

		</div>
		
</center>
	</div>
</body>
</html>