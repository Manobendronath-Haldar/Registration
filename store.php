<?php

$conn=mysqli_connect('localhost','root','','ledp_jashore');

session_start();

$name=$_POST['name'];
$father=$_POST['father'];
$phone=$_POST['phone'];
$course=$_POST['course'];
$district=$_POST['district'];


$sql="INSERT INTO ledp_data VALUES ('','$name', '$father','$phone','$course','$district')";



if (mysqli_query($conn,$sql)) {
	header('location:index.php');

	$_SESSION['message']="true";
}

?>