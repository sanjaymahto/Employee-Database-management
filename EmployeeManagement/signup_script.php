<?php
	error_reporting(0);
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$name = mysqli_real_escape_string($con,$name);
		$name = strip_tags($name);
		
		$email = $_POST['e-mail'];
		$email = mysqli_real_escape_string($con,$email);
		$email = strip_tags($email);
		
		$password = $_POST['password'];
		$password = mysqli_real_escape_string($con,$password);
		$password = strip_tags($password);
		$password = base64_encode($password);
		
		$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		$regex_num = "/^[789][0-9]{9}$/";
		$query = "SELECT * FROM persons WHERE Email='$email'";
		$result = mysqli_query($con, $query);
		$num = mysqli_num_rows($result);

		if ($num != 0)
			{
			$m = "<span style='color:white;'>Email Already Exists</span>";
			header('location: signup.php?m1='.$m);
			}
		else if (!preg_match($regex_email, $email))
			{
			$m = "<span style='color: white;'>Not a valid Email Id</span>";
			header('location: signup.php?m1='.$m);
			}			
			$query = "INSERT INTO persons
			(Name, Email, Password)
			VALUES
			('{$name}','{$email}','{$password}')";
			if(mysqli_query($con,$query)){
				session_start();
				if($_SESSION['email']=='mahto.sanjay41@gmail.com')
				{
					$m = "<span style='color:white;'>Employee has been Added.</span>";
			header('location: admin_add_employee.php?m1='.$m);
				}
				else
				{
				$_SESSION['email']=$email;
				header('location: Employe_login.php');	
				}
			}else{
				echo "error while inserting the records".mysqli_error($con);
			}
		}
		
?>