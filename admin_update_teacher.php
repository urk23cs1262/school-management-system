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

if($_GET['teacher_id'])
{
	$t_id=$_GET['teacher_id'];

	$sql="SELECT * FROM teacher WHERE id='$t_id'";

	$result=mysqli_query($data,$sql);

	$info=$result->fetch_assoc();
}

if(isset($_POST['update_teacher']))
{
	$id=$_POST['id'];

	$t_name=$_POST['name'];

	$t_gender=$_POST['gender'];

	$t_qualification=$_POST['qualification'];

	$t_description=$_POST['description'];

	$t_phone=$_POST['phone'];

	$sql2="UPDATE teacher SET name='$t_name','$t_gender','$t_qualification','$t_description','$t_phone' WHERE id='$id'";

	$result2=mysqli_query($data,$sql2);

	if($result2)
	{
		header('location:admin_view_teacher.php');
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	
	<?php

	include 'admin_css.php';


	?>

	<style type="text/css">
		

		label
		{
			display: inline-block;
			width: 150px;
			text-align: right;
			padding-top: 10px;
			padding-bottom: 10px;
		}
		.form_deg
		{
			background-color: skyblue;
			width: 600px;
			padding-top: 70px;
			padding-bottom: 70px;
		}



	</style>

</head>
<body>
	<?php

	include 'admin_sidebar.php';



	?>

	<div class="content">

		<center>

		<h1>Update Teacher Data</h1>

		<br><br>

		<form class="form_deg" action="admin_update_teacher.php" method="POST">

			<input type="text" name="id" value="<?php echo "{$info['id']}" ?>" hidden>
			
			<div>
				

				<label>Name</label>
				<input type="text" name="name"
				value="<?php echo "{$info['name']}" ?>">


			</div>


			<br>

			<div>
				

				<label>Gender</label>
				<input type="text" name="gender"
				value="<?php echo "{$info['gender']}" ?>">


			</div>

			<br>

			<div>
				

				<label>Qualification</label>
				<input type="text" name="qualification"
				value="<?php echo "{$info['qualification']}" ?>">


			</div>

			<br>

			<div>
				

				<label>About Teacher</label>
				<textarea name="description" rows="4"><?php echo "{$info['description']}" ?>
					
				</textarea>


			</div>

			<br>

			<div>
				

				<label>phone</label>
				<input type="text" name="phone"
				value="<?php echo "{$info['phone']}" ?>">


			</div>

			<br>

			<div>
				

			
				<input class="btn btn-success" type="submit" name="update_teacher"  >


			</div>

			


		</form>
		
	</center>


	</div>
</body>
</html>