<?php
	error_reporting(0);
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$email = $_POST['e-mail'];
		$email = mysqli_real_escape_string($con,$email);
		$email = strip_tags($email);

		$password = $_POST['password'];
		$password = mysqli_real_escape_string($con,$password);
		$password = strip_tags($password);
		$password = base64_encode($password);

		$query = "SELECT Email, Password FROM persons WHERE Email='{$email}' and Password='{$password}'";
		$result = mysqli_query($con,$query);
		$num = mysqli_num_rows($result);
		if ($num == 0) // that is if no records found in database
			header('location: error.php');
		else{
				$row = mysqli_fetch_assoc($result);
				$sam1=$row['Email'];
				if($sam1=='mahto.sanjay41@gmail.com')
				{
					$row = mysqli_fetch_array($result);
					session_start();
					$_SESSION['email']=$sam1;
					header('location: adminpage.php');
				}
				else
				{
					header('location: error2.php');
					
				}
	}
	}
?>