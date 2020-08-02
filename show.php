
<?php

$conn=mysqli_connect('localhost','root','','ledp_jashore');

session_start();

$sql="SELECT* FROM ledp_data";

$result=mysqli_query($conn,$sql);

if (!isset($_SESSION['login'])) {
	header('location: login.php');
}

?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Show Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style>
		body{
			background-color: #D2691E;		
		}
#btn{
	background-color: #D2691E;
	font-weight: bold;
}
			
	</style>
</head>
<body>

	<div>
		<a class="btn btn-primary float-right mt-2 mr-5" id="btn" href="logout.php">Logout</a>
	</div>

<div class="container">
	
	<div class="row">

		<div class="col-md-12 mt-5">

			
			
			<h1 class="text-center text-success bg-light"><b>DATA INFO TABLE</b></h1>

			<table class="table table-bordered bg-light mt-5">

			
				<?php
				if (isset($_SESSION['delete'])) { ?>

					<div class="alert alert-danger">
						<h5>Data Remove Successfully !!</h5>
					</div>

				<?php }?>

				<tr>
					<th>SERIAL NUMBER</th>
					<th>Name</th>
					<th>FATHER'S NAME</th>
					<th>PHONE NUMBER</th>
					<th>COURSE NAME</th>
					<th>DISTRICT NAME</th>
					<th>ACTION</th>
				</tr>
				
				<?php 
				while ($row=mysqli_fetch_assoc($result)) {
					
				?>
				

				<tr>
					<td><?=$row['id']; ?></td>
					<td><?=$row['name']; ?></td>
					<td><?=$row['father']; ?></td>
					<td><?=$row['phone']; ?></td>
					<td><?=$row['course']; ?></td>
					<td><?=$row['district']; ?></td>
					<td>
						<a class="btn btn-success" href="view.php?id=<?=$row['id']; ?>">View</a>
						<a class="btn btn-secondary" href="edit.php?id=<?=$row['id']; ?>">Edit</a>
						<a class="btn btn-danger" onclick="return confirm('Delete ??')" href="delete.php?id=<?=$row['id']; ?>">Delete</a>
					</td>
				</tr>
				
				<?php }?>

			</table>


		</div>
	</div>
</div>

<?php unset($_SESSION['delete']); ?>

</body>
</html>