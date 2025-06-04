<?php


error_reporting(0);
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

$sql="SELECT * FROM course";

$result=mysqli_query($data,$sql);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	
	<?php

	include 'admin_css.php';


	?>
</head>
<body>
	<?php

	include 'admin_sidebar.php';



	?>

	<style type="text/css">
		

		.table_th
		{
			padding: 20px;
			font-size: 20px;
			 font-weight: bold;

		}
		.table_td
		{
			padding: 20px;
			background-color: skyblue;
			 font-weight: bold;
		}






	</style>

	<div class="content">

		<center>

		<h1>COURSES @ CSC</h1>

		<?php

		if($_SESSION['message'])
		{
			echo $_SESSION['message'];
		}

		unset($_SESSION['message']);


		?>

		<br><br>

		<table border="1px">
			
			<tr>
				
				<th class="table_th">Course Nmae</th>
				<th class="table_th">Course Fee</th>
				<th class="table_th">Subjects</th>
				<th class="table_th">Duration</th>
				<th class="table_th">Delete</th>
				<th class="table_th">Update</th>

			</tr>






			<?php


			while($info=$result->fetch_assoc())
			{


			?>




			<tr>
				
				<td class="table_td">
					
					<?php echo "{$info['coursename']}";?>

				</td>
				<td class="table_td">


					<?php echo "{$info['coursefee']}";?>
					
					</td>
				<td class="table_td">
					

					<?php echo "{$info['subjects']}";?>
				
				</td>
				<td class="table_td">
					
					<?php echo "{$info['duration']}";?>
				
				</td>
				<td class="table_td">
					
					<?php 

					echo "<a  onClick=\"javascript:return confirm('Are You Sure To Delete This?'); \" class='btn btn-danger' href='course_delete.php?course_id={$info['id']}'>Delete</a>";

					?>
				
				</td>

				<td class="table_td">
					
					<?php echo "<a class='btn btn-primary' href='update_course.php?course_id={$info['id']}'>Update</a>";?>
				
				</td>



			</tr>


			<?php

		}

			?>






		</table>

		<br><br>

		<br><br>

		<h4><b>NOTE : "FEES STRUCTURE WILL CHANGE DURING SAT TIMES"</b></h4>
		
	</center>

	</div>
</body>
</html>