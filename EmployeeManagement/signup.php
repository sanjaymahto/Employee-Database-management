<?php
error_reporting(0);
session_start();
if($_SESSION['email']=='mahto.sanjay41@gmail.com')
{
	
}
else
{
if(isset($_SESSION['email']))
{
	header('location:Employe_login.php');
}
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
	<link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
	
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
	$("a[href='#top']").click(function(){
		$("html, body").animate({
	scrollTop:0}."slow");returnfalse;});
	</script>

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
                     <span class="light" style="color:white; fonts:tahoma;">Online-Attendence</span>
                </a>
				
            </div>
			<div calss="navbar-header">
			<h3 style="text-align:center;><span class="light" style="color:white; fonts:tahoma;">SIGNUP FORM</span></h3>
			</div>

            

	<!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form role="form" action="signup_script.php" method="POST">
								</br>
								</br>
                                <div >
								<input type="Text" class="form-control"  placeholder="Name" name="name" required = "true">
							</div>
							</br>
							</br>
							<div >
								<input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true"><?php echo $_GET['m1'];?>
							</div>
							</br>
							</br>
							<div >
								<input type="password" class="form-control" placeholder="Password" name="password" required = "true">
							</div>
							</br>
							</br>
						    <button type="submit" name="submit" class="w3-btn w3-hover-green w3-border w3-border-green w3-round-xlarge">Submit</button>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </header>

<footer>
        <div class="container text-center">
            <p style="text-color:grey; text-align:center;">Copyright &copy; online-attendence.com <h4 style="text-align:right;"> <a href="#top"></a></h4>
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
</body>
</html>
