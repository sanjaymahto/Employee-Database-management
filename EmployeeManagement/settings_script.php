<?php 
	session_start();
	if (!isset($_SESSION['email']))
	header('location: index.php');
	require_once("connection.php");
	
	if(isset($_POST['submit'])){
	
	$old_pass = $_POST['old-password'];
	$old_pass = mysqli_real_escape_string($con, $old_pass);
	$old_pass = strip_tags($old_pass);
	$old_pass = base64_encode($old_pass);

	$new_pass = $_POST['password'];
	$new_pass = mysqli_real_escape_string($con, $new_pass);
	$new_pass = strip_tags($new_pass);
	$new_pass = base64_encode($new_pass);

	$new_pass1 = $_POST['password1'];
	$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
	$new_pass1 = strip_tags($new_pass1);
	$new_pass1 = base64_encode($new_pass1);

	$query = "SELECT Email, Password FROM persons
	WHERE Email ='".$_SESSION['email']."'";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_array($result);
	$orig_pass = $row['Password'];
	if ($new_pass != $new_pass1)
		{
		header('location: setting.php?error=Retype password don\'t match\'s new password');
		}
	else
		{
		if ($old_pass == $orig_pass)
			{
				$query = "UPDATE  persons SET Password = '".$new_pass."' WHERE Email = '".$_SESSION['email']."'";
				mysqli_query($con, $query);
				header('location: setting.php?error="Password Updated"');
				
			
			}
		else
		{
			header('location: setting.php?error="New Password is same as old Password"');
		}
		}
	}
?>