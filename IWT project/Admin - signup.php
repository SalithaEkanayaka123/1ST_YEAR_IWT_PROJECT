<?php include('server.php'); ?>

<!DOCTYPE HTML>
<html>
<head>

<title> Admin - signup </title>

<link rel = "stylesheet" type = "text/css" href = "styles/Admin - signup.css">

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
</header>

<form method = "post" action="server.php">
		<div class = "input-group">
			<lable> Fisrt Name </lable>
			<input type = "text" name = "userID">
		</div>
		<div class = "input-group">
			<lable> Second Name </lable>
			<input type = "text" name = "firstName">
		</div>
		<div class = "input-group">
			<lable> E-mail </lable>
			<input type = "text" name = "secondName">
		</div>
		<div class = "input-group">
			<lable> Address </lable>
			<input type = "text" name = "Address">
		</div>
		<div class = "input-group">
			<button type = "submit" name = "save" class="button">Save</button> 
		</div>
	</form>
	</body>
