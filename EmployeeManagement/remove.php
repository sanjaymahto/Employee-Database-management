<?php
error_reporting(0);
require_once("connection.php");
session_start();
$sam6=$_SESSION['email'];
$fileName = $_GET['name'];
$filePath= realpath($fileName);
$query = "DELETE FROM image WHERE Email='$sam6'";
mysqli_query($con, $query);
if ( file_exists($filePath) ) {
	unlink($filePath);
	header('Location: Employe_info.php');
}
else
{
	echo "Image is already removed.";
}

?>