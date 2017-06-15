<?php 
	session_start();
	if (!isset($_SESSION['email']))
	header('location: index.php');
	error_reporting(0);
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
	<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.w3-btn {margin-bottom:10px;
       width:150px;
}
</style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">
                     <span class="light" style="color:white; fonts:tahoma;">Online-Attendence.com</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="Logout.php">Logout</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="setting.php">Settings</a>
                    </li>
					<li>
                        <a class="page-scroll" href="image_upload.php">Image</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
		<!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                       <div class="row">
				<div class="col-lg-4 col-lg-offset-4" style="margin-top:80px;margin-bottom:10px;">
					<h4>Change Password</h4>
					<form action="settings_script.php" method="POST">
						<div class="form-group">
							<input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
						</div>
					  <button type="submit" name="submit" class="w3-btn w3-hover-green w3-border w3-border-green w3-round-xlarge">Change</button>
					  </br>
					  <?php
								echo "<b>".$_GET['error']."</b>";
						?>
					</form>
				</div>
			</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
	
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