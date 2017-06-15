<?php 
error_reporting(0);
session_start();
if($_SESSION['email']=='mahto.sanjay41@gmail.com')
{

	if(isset($_SESSION['email']))
	{
		require_once("connection.php");
		$name =$_SESSION['x'];
		$query = "SELECT Name FROM persons WHERE Name='{$name}'";
		$result = mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($result);
		$sam1=$row['Name'];	
		$query = "SELECT Email FROM persons WHERE Name='{$name}'";
		$result = mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($result);
		$sam2=$row['Email'];	
	}
	
}
else
{
	header('location: index.php');
}

?>			

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="employee,employee attendence,employer of the month,employee database,employee presense,employee ounchcard">
    <meta name="Sanjay kumar mahto" content="employee database record system">
	
    <title>Online-Attendence</title>
	<!-- Title Image-->
	<link rel="shortcut icon" href="title.png"  class="img-rounded" type="image/png">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php"><a href="index.php" class="btn btn-circle page-scroll">
                            <i class="fa fa-home animated"></i>
							&nbsp;&nbsp;
                        </a>	
                     <span class="light" style="color:white; fonts:tahoma;">&nbsp;&nbsp;  Online-Attendence.com</span>
                </a>
            </div>

        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
		<!--image-->
	<div class="container">
	<div class="row">
	<p style="text-align:center;">
	
	<?php
						require_once("connection.php");
						if (mysqli_connect_errno())
						{
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}

						$result = mysqli_query($con,"SELECT image FROM image WHERE email='{$sam2}'" );
						
						while($row = mysqli_fetch_array($result))
						{
							echo '
							
	       		<div class="col-md-3">
					</br>
					 <img src="' . $row['image'] . '" class="img-thumbnail" alt="sorry! No Image has been selected." width="300" height="300">
						</br>
							</div>';  
						}
						mysqli_close($con);

						?>
						</p>
						
						</div>
						</div>
						</br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                       <p class="intro-text">EMPLOYEE INFORMATION:<br></p>
                        <h3>Name: <?php echo $sam1;?></h3>
						<h3>Email-ID: <?php echo $sam2;?></h3>		 
                    </div>
                </div>
            </div>
        </div>
    </header>
	
	
	 <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p style="text-color:grey; text-align:center;">Copyright &copy; online-attendence.com <h4 style="text-align:right;"> <a href="#top"> Go to top </a></h4>
			Created by:-Sanjay kumar mahto
			</p>
			
        </div>
		
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

	
	
</body>

</html>

