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

if(isset($_POST['add_student']))
{
	$username=$_POST['name'];
	$user_course=$_POST['course'];
	$user_email=$_POST['email'];
	$user_phone=$_POST['phone'];
	$user_password=$_POST['password'];
	$usertype="student";


	$check="SELECT * FROM user WHERE username='$username'";

	$check_user=mysqli_query($data,$check);

	$row_count=mysqli_num_rows($check_user);

	if($row_count==1)

	{

		echo "<script type='text/javascript' > 

		alert('Username Already Exist. Try Another one');

		</script>";


		}

	else
	{



	$sql="INSERT INTO user(username,course,phone,email,usertype,password) VALUES ('$username','$user_course','$user_email','$user_phone','$usertype','$user_password')";


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
		<h1>Add student</h1>
		<br><br>

		<div class="div_deg">
			<form action="#" method="POST">
				
				<div>
					
					<label>Username</label>
					<input type="text" name="name">

				</div>

				<div>
					
					<label>Course</label>
					<input type="text" name="course">

				</div>


				<div>
					
					<label>Email</label>
					<input type="email" name="email">

				</div>

				<div>
					
					<label>phone</label>
					<input type="number" name="phone">

				</div>

				<div>
					
					<label>Password</label>
					<input type="text" name="password">

				</div>


				<div>
					
					
					<input style=" font-weight: bold;" type="submit" class="btn btn-primary" name="add_student" value="Add student">

				</div>



			</form>

		</div>
		
</center>
	</div>
</body>
</html>