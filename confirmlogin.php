<?php 

$conn=mysqli_connect('localhost','root','','ledp_jashore');

session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT* FROM login_ledp WHERE username='$username' AND password='$password'";


$result=mysqli_query($conn,$sql);

$rowcount=mysqli_num_rows($result);

if ($rowcount==1) {
	$_SESSION['login']=true;
	header('location:show.php');
}else{
	$_SESSION['msg']=true;
	header('location:index.php');
}

 ?>