<?php
//error_reporting(0);
session_start();
if(!isset($_SESSION['email']))
{
	header('location: index.php');
}
else
{
if($_SESSION['email']=='mahto.sanjay41@gmail.com')
{
	header:('location: adminpage.php');
}
else
{
	$sam3=$_SESSION['email'];
$target_Folder = "uploads/";

$uid = $_POST['id'];

$target_Path = $target_Folder.basename( $_FILES['uploadimage']['name'] );

$savepath = $target_Path.basename( $_FILES['uploadimage']['name'] );

    $file_name = $_FILES['uploadimage']['name'];

    if(file_exists('uploads/'.$file_name))
{
    header('location: successfull_submission.php?error="Sorry! Image Already exists."');
    }
    else
    {

        // Database 
    require_once("connection.php");

//Check Connection
        if(mysqli_connect_errno())
        {
             header('location: successfull_submission.php?error="Failed to connect to database"');
        }

        $sql = "INSERT INTO image (id,image, image_name, email)
                    VALUES     ('','$target_Folder$file_name','$file_name','$sam3')";
			
		$samuel	= mysqli_query($con,$sql);
        if ($samuel==0)
        {
            die('Error: ' . mysqli_error($con));
        }
		mysqli_close($con);
		 move_uploaded_file( $_FILES['uploadimage']['tmp_name'],     $target_Path );
		 if($samuel!=0)
		 {
			 header('location: successfull_submission.php?error="Image added successfully."');
			 
		 }
      

    }


	
	
}
}


?>