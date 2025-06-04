<?php

session_start();

error_reporting(0);

if(!isset($_SESSION['username']))
{
	header("location:login.php");
}
elseif($_SESSION['usertype']=='admin')
{
	header("location:login.php");
}


$host="localhost";

$user="root";

$password="";

$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * FROM user WHERE username='kali'";

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

	<style type="text/css">
		

		.table_th
		{
			padding: 20px;
			font-size: 20px;
		}
		.table_td
		{
			padding: 20px;
			background-color: skyblue;
		}



	</style>


</head>
<body>
	<?php

	include 'student_sidebar.php';



	?>

	<div class="content">

		<center>

		<h1>My Course</h1>

		<br><br>

		<table border="1px">
			

			<tr>
				

				
				<th class="table_th">Course</th>
				
				


			</tr>


			<?php

				while ($info=$result->fetch_assoc())
				{
				

			?>



			<tr>
					<td class="table_td">
						<?php echo "{$info['course']}";  ?>
					</td>


			</tr>

			<?php

			}

			?>


		</table>
		
		</center>

	</div>
</body>
</html>