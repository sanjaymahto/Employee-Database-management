<?php
	error_reporting(0);
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$email = $_POST['e-mail'];
		$email = mysqli_real_escape_string($con,$email);
		$email = strip_tags($email);
			
		$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
			if (!preg_match($regex_email, $email))
			{
			$m = "<span style='color: white;'>Not a valid Email Id</span>";
			header('location: modal4.php?m1='.$m);
			}			
			$query = "SELECT Password FROM persons WHERE Email='{$email}'";
			$result = mysqli_query($con, $query);
			if(mysqli_num_rows($result) > 0)
			{
			$row = mysqli_fetch_assoc($result);
			$pwd=$row['Password'];
			$pwd1=base64_decode($pwd);
			header('location: password_restore.php?m2='.$pwd1);
			}
			else
			{
				header('location: error1.php');
			}
		}
		
?>