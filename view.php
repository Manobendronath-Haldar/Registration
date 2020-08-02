<?php 

$conn=mysqli_connect('localhost','root','','ledp_jashore');
session_start();

$id=$_GET['id'];

$sql="SELECT* FROM ledp_data WHERE id=$id";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

if (!isset($_SESSION['login'])) {
	header('location: login.php');
}
 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>View Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">


	<style>
		body{
			background-color: #D2691E;		
		}

		.table{
			background-color: #FF7F50;
			}
			#btn{
	background-color: #D2691E;
	font-weight: bold;
}
	</style>
		
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<h1 class="text-center text-success bg-light mt-3"><b>VIEW SINGLE DATA</b></h1>

			
				
				<table class="table table-bordered mt-4">
					<tr>
						<th>Name</th>
						<th><?=$row['name']; ?></th>
					</tr>					
					<tr>
						<th>Father's Name</th>
						<th><?=$row['name']; ?></th>
					</tr>					
					<tr>
						<th>Phone Number</th>
						<th><?=$row['phone']; ?></th>
					</tr>					
					<tr>
						<th>Course Name</th>
						<th><?=$row['course']; ?></th>
					</tr>
					<tr>
						<th>District Name</th>
						<th><?=$row['district']; ?></th>
					</tr>
				</table>

		</div>
		<div class="col-md-2">
			<div class="mt-5 mr-5">
				<a class="btn btn-success float-right" id="btn" href="show.php">Back</a>
			</div>
		</div>
	</div>
</div>





<script src="js/bootstrap.min.js"></script>

</body>
</html>