<?php

$conn=mysqli_connect('localhost','root','','ledp_jashore');

$id=$_GET['id'];

$name=$_POST['name'];
$father=$_POST['father'];
$phone=$_POST['phone'];
$course=$_POST['course'];
$district=$_POST['district'];


$sql="UPDATE ledp_data SET name='$name', father='$father', phone='$phone', course='$course' , district='$district' WHERE id=$id";



if (mysqli_query($conn,$sql)) {
	header('location: show.php');
}

?>