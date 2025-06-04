<?php

session_start();

error_reporting(0);

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

$id=$_GET['course_id'];

$sql="SELECT * FROM course WHERE id='$id'";

$result=mysqli_query($data,$sql);

$info=$result->fetch_assoc();


if(isset($_POST['update']))
{
	$coursename=$_POST['coursename'];
	$coursefee=$_POST['coursefee'];
	$subjects=$_POST['subjects'];
	$duration=$_POST['duration'];


	$query="UPDATE course SET coursename='$coursename',coursefee='$coursefee',subjects='$subjects',duration='$duration' WHERE id='$id'";

	$result2=mysqli_query($data,$query);

	if($result2)
	{
		header("location:view_course.php");
	}


}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Student</title>
	
	<?php

	include 'admin_css.php';


	?>


	<style type="text/css">
		

		label
		{
			display: inline-block;
			width: 100px;
			text-align: right;
			padding-top: 10px;
			padding-bottom: 10px;
		}

		.div_deg
		{
			background-color: skyblue;
			width: 400px;
			padding-bottom: 70px;
			padding-top: 70px;
		}


	</style>



</head>
<body>
	<?php

	include 'admin_sidebar.php';



	?>

	<div class="content">

		<center>

		<h1>Update Course</h1>

		<br><br>

		<div class="div_deg">
			
			<form action="#" method="POST">
				

				<div>
					

					<label>Course name</label>
					<input type="text" name="coursename" 
					value="<?php echo "{$info['coursename']}";?>">


				</div>	

				<div>
					

					<label>Course Fee</label>
					<input type="text" name="coursefee" 
					value="<?php echo "{$info['coursefee']}";?>">


				</div>	

				<div>
					

					<label>Subjects</label>
					<input type="text" name="subjects"
					value="<?php echo "{$info['subjects']}";?>">


				</div>	

				<div>
					

					<label>Duration</label>
					<input type="text" name="duration"
					value="<?php echo "{$info['duration']}";?>">


				</div>	

				<div>
					

					
					<input class="btn btn-success" type="submit" name="update" value="Update">


				</div>	

			</form>

		</div>
		
		</center>

	</div>
</body>
</html>