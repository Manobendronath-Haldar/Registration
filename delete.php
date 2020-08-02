
<?php

$conn=mysqli_connect('localhost','root','','ledp_jashore');

session_start();

$id=$_GET['id'];

$sql="DELETE FROM ledp_data WHERE id=$id";

if (mysqli_query($conn,$sql)) {
 	header('location: show.php');

 	$_SESSION['delete']="true";
 } 


?>