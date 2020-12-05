<?php
    include 'server.php';
?>
<!DOCTYPE HTML>
<html>
<head>

<title> User account </title>

<link rel = "stylesheet" type = "text/css" href = "styles/fileupload.css">
<link rel = "stylesheet" type = "text/css" href = "styles/background.css">

</head>

<body>

<header>	
	
	<div class =  "logo "> <img src = "images/logo.png" width = "280px" height = "70px" > 

		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">News</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Sign up</a></li>
			<li ><a class = "Login" href="#">Log in</a></li>
		</ul>
		</div>
		
</header><section>


	<center>
        <br><br><br>
	<h1> My Profile </h1>
	
	<img src="images/images.png" style="vertical-align:right">
	
	<div class="bord" style="vertical-align: left">
	
	
	</div>
	</center>

	<br/><br/>
	
	<form class="choosefile" method="POST" action="fileupload.php">
				<input type="file" name="fileToUpload" class="button">
                <input type="submit" name="submit" value="Upload" class="button" onclick="myFunction()">
		
	</form>
	<br/><br/><br/>
	<hr>
	<center>
	
	<div class="footer">
		&#169 2019 Redcloud. All rights reserved
	</div>
	
	</center>
	</hr>
</body>
</html>