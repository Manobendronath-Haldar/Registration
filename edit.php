<?php 

$conn=mysqli_connect('localhost','root','','ledp_jashore');
session_start();

$id=$_GET['id'];

$sql="SELECT* FROM ledp_data WHERE id=$id";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP & MySQL</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		body{
			background-color: #D2691E;		
		}
		#form{
				background-color: #FF7F50;
			}
	</style>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8 text-center">
			<h1 class="text-center text-success bg-light mt-3">Edit Data</h1>

			


			<form action="update.php?id=<?= $id ?>" method="POST" id="form">
				<input class="form-control mt-3" name="name" type="text" value="<?=$row['name']; ?>">
				<input class="form-control mt-3" name="father" type="text" value="<?=$row['father']; ?>">
				<input class="form-control mt-3" name="phone" type="phone" value="<?=$row['phone']; ?>">
				<input class="form-control mt-3" name="course" type="text" value="<?=$row['course']; ?>">
				<input class="form-control mt-3" name="district" type="text" value="<?=$row['district']; ?>">
				
				<input class="btn btn-info mt-3" type="submit" value="UPDATE">
			</form>

		</div>
		<div class="col-md-2">
			<div class="mt-5 mr-5">
				<a class="btn btn-success float-right" href="show.php">Back</a>
			</div>
		</div>
	</div>
</div>


<script src="js/bootstrap.min.js"></script>


</body>
</html>