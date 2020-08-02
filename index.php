<?php
session_start();


 $conn=mysqli_connect('localhost','root','','ledp_jashore');


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exam</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<style>
		body{
			background-color: #D2691E;		
		}
			#form{
				background-color: #FF7F50;
			}
			#btn{
	background-color: #D2691E;
	font-weight: bold;
}


	</style>
</head>
<body>
	<div class="container" id="h1">
		<div class="row">
			<div class="col-md-12">
				<div class="bg-light text-center mt-5 text-success">
					<h1><b>WELCOME TO DASHBOARD </b></h1>
					<?php
				if (isset($_SESSION['message'])) { ?>

					<div class="alert alert-success">
						<h5>Data Insert Successfully !!</h5>
					</div>

				<?php }?>
				</div>

</div>
</div>
</div>


				
					<div class="container">
						<div class="row">

							<div class="col-md-3"></div>
					<div class="col-md-6 mt-5" id=form>
					
					<form action="store.php" method="POST" class="mt-4 text-center">
						<h1><b>REGISTRATION FORM</b></h1>
						<input class="form-control mt-2" type="text" name="name" placeholder="Enter Your Name">
						<input class="form-control mt-2" type="text" name="father" placeholder="Enter Your Father's Name">
						<input class="form-control mt-2" type="phone" name="phone" placeholder="Enter Your Phone Number">
						<input class="form-control mt-2" type="text" name="course" placeholder="Enter Your Course Name">
						<input class="form-control mt-2" type="text" name="district" placeholder="Enter Your District Name">
						<input class="btn btn-lg bg-info mb-4 mt-4" type="submit" id="btn" value="Registration">
					</form>
					</div>
					<div class="col-md-3">
						<div class="float-right mr-5 mt-5">
	<a class="btn btn-light btn-lg float-right" id="btn" href="login.php">Admin Login</a>
</div>
					</div>
					</div>
					</div>
				
			
			
	


	<script src="js/bootstrap.min.js"></script>


	<?php unset($_SESSION['message']); ?>
</body>
</html>