<?php
error_reporting(0);
session_start();
if($_SESSION['email']=='mahto.sanjay41@gmail.com')
{
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$name = mysqli_real_escape_string($con,$name);
		$name = strip_tags($name);

		$query = "SELECT Name FROM persons WHERE Name='{$name}'";
		$result = mysqli_query($con,$query);
		$num = mysqli_num_rows($result);
		if ($num == 0) // that is if no records found in database
			header('location: error3.php');
		else{
				$query = "SELECT Name FROM persons WHERE Name='{$name}'";
				$result = mysqli_query($con,$query);
				$row = mysqli_fetch_assoc($result);
				$sam1=$row['Name'];
				$_SESSION['x']=$sam1;
				header('location: search.php');
			}
								}
}
else
{
	header('location: index.php');
}
?>