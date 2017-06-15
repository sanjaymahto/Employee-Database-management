<?php
error_reporting(0);
session_start();
if($_SESSION['email']=='mahto.sanjay41@gmail.com')
{
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
                     <span class="light" style="color:white; fonts:tahoma;">Online-Attendence</span>
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
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
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
						<h2 class="brand-heading">WELCOME</h2>
                        <p class="intro-text">SELECT YOUR OPTION<br></p>
                        <a href="#myModal6" data-toggle="modal" class="btn btn-circle page-scroll">
                            <i class="fa fa-search animated" title="Search an Employee"></i>
                        </a>
						&nbsp;&nbsp;&nbsp;
						<a href="signup.php" class="btn btn-circle page-scroll">
                            <i class="fa fa-users animated" title="Add an employee"></i>
                        </a>
						&nbsp;&nbsp;&nbsp;
						<a href="#myModal5" data-toggle="modal" class="btn btn-circle page-scroll">
                          <i class="fa fa-times-circle animated" title="Delete an Employee"></i>
                        </a>
						&nbsp;&nbsp;&nbsp;
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
	  <section id="attendence" class="content-section text-center">
        <div class="download-section">
            <div class="container">
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2><span style="coler:white; font-style:bold;">About Online Attendence</span></h2>
                <p style="font-style:strong;">Online attendence system is an online system to keep the daily records of Attendence of the workers in our company.It is very reliable,user-friendly and robust.</p>
				
				</br>
				</br>
            </div>
        </div>
    </section>
	</div>
            </div>
        </div>
    </section>

   
    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact us</h2>
                <p>Feel free to email us to provide feedback on our online attendence system, give us  your suggestions or to just say hello!</p>
				<div class="row">
                <div class="col-lg-12">
                    <form action="contact_script.php" method="POST" name="sentMessage" id="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" name="e-mail" required data-validation-required-message="Please enter your email address.">
									<?php echo $_GET['m1'];?>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" rows="4" name="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
							</div>
							</div>
							<div class="row">
							<div align="center">
							<p><span style="color:white;">Fields that are marked with * are compulsary</span></p>
							</div>
							</div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit"  name="submit" class="button"  >Send Message</button>
                            </div>
                        </div>
                    </form>
			</br>
			</br>
                <p>follow me on:
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://www.facebook.com/sanjay.mahto.9461" class="btn btn-default btn-lg" target="blank"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">facebook</span></a>
                    </li>                			
                </ul>
				
            </div>
        </div>
    </section>

   <!-- Map Section -->


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
	
	<!--Modal-->
	<?php include("modal5.php"); ?>
	<?php include("modal6.php"); ?>
</body>

</html>
