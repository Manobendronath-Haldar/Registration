
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
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
		<div class="col-md-3">
		</div>
		<div class="col-md-6 text-center mt-5 mb-4">
			<h1 class="text-center text-primary bg-light">USER LOGIN FORM</h1>

			<form action="confirmlogin.php" method="POST" id="form">
				<h1>LOGIN FORM</h1>
				<input class="form-control mt-3" name="username" type="text" placeholder="UserName">
				<input class="form-control mt-3" name="password" type="password" placeholder="Password">
				<input class="btn btn-info mt-3 " type="submit" value="Login">
			</form>

		</div>
		<div class="col-md-3"></div>
	</div>
</div>


<script src="js/bootstrap.min.js"></script>


</body>
</html>