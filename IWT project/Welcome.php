<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
	<head>
	

		<title> Red Cloud   </title>
        <link rel = "icon" type = "image/ico" href = "src/images/Favicon.png">	
		<link  rel= "stylesheet" type ="text/css" href= "src/styles/background1.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	</head>
	
	<body>
	<?php echo $login_session; ?>
	<div class="icon-bar">
		<a href="www.facebook.com" class="facebook"><i class="fa fa-facebook"></i></a> 
		<a href="www.twitter.com" class="twitter"><i class="fa fa-twitter"></i></a> 
		<a href="www.google.com" class="google"><i class="fa fa-google"></i></a> 
		<a href="www.linkedin.com" class="linkedin"><i class="fa fa-linkedin"></i></a>
		<a href="www.youtube.com" class="youtube"><i class="fa fa-youtube"></i></a>
	</div>
		
		<ul class = "navig">
			<li><a href="incover.html">Home</a></li>
			<li><a href="https://www.google.com/">News</a></li>
			<li><a href="contactus.html">Contact</a></li>
			<li><a href="aboutus.html">About Us</a></li>
			<li><a href = "logout.php">Sign Out</a></h2></li>
	
		</ul>
		
		<br>
		
		

			<h1>Red cloud</h1>
			<h3> one of online storage system</h3>
	
				<p align="center" class="discript">
				Red cloud storage helps your company grow without limits, while you maintain complete control over important company information and user activity.
					More than 100 teams use Red cloud storage system
					
				</p>

			</footer>	
	</body>
</html>