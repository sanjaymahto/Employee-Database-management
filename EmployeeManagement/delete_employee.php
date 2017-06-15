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
		$query = "SELECT Email FROM persons WHERE Name='$name'";
		$result = mysqli_query($con, $query);
		$row = mysqli_fetch_assoc($result);
		$sam11=$row['Email'];	
		if($sam11=='mahto.sanjay41@gmail.com')
		{
			$m = "<span style='color: white;'>SORRY! YOU ARE AN ADMINISTRATOR.</span>";
			header('location: delete_employeepage.php?m1='.$m);
		}
		else
		{
			
		//$query = "DELETE FROM persons WHERE Email='$sam11'";
		//$result = mysqli_query($con, $query);
		$num = mysqli_num_rows($result);
		if ($num>0)
		{
			$query = "DELETE FROM persons WHERE Email='$sam11'";
			mysqli_query($con, $query);
			$query = "SELECT image_name FROM image WHERE email='$sam11'";
			$sammm = mysqli_query($con, $query);
				$filname=mysqli_fetch_assoc($sammm);
				$fileNam=$filname['image_name'];
				$fileName='uploads/'.$fileNam;
				$filePath= realpath($fileName);
				$query = "DELETE FROM image WHERE email='$sam11'";
				mysqli_query($con, $query);
				if ( file_exists($filePath) ) 
					unlink($filePath);
			unlink($name);
		$m = "<span style='color: white;'>RECORD DELETED SUCCESSFULLY.</span>";
		header('location: delete_employeepage.php?m1='.$m);
		} else 
		{
		$m = "<span style='color: white;'>SORRY! RECORD NOT FOUND.</span>";
			header('location: delete_employeepage.php?m1='.$m);
		}

		}
}
}
else
{
	header('location: index.php');
}
	
	?>