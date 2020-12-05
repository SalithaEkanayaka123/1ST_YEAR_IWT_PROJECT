<?php include('server.php'); ?>


 <head>
	<title> Red Cloud:Register! </title>
	<link rel = "icon" type = "image/ico" href = "src/images/Favicon.png">	
	<link rel = "stylesheet" type ="text/css" href = "styles/Reg.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/registration.js"> </script>
</head>
	
<body>

	<div class="header" id="header">
		<center><h1>Red Cloud</h1>
		<p>Make your own space</p></center>
	</div>
	
	<div class="icon-bar">
		<a href="www.facebook.com" class="facebook"><i class="fa fa-facebook"></i></a> 
		<a href="www.twitter.com" class="twitter"><i class="fa fa-twitter"></i></a> 
		<a href="www.google.com" class="google"><i class="fa fa-google"></i></a> 
		<a href="www.linkedin.com" class="linkedin"><i class="fa fa-linkedin"></i></a>
		<a href="www.youtube.com" class="youtube"><i class="fa fa-youtube"></i></a> 
	</div>
	 
	<ul class = "navig">
		
		<li><a class="link" href="https://www.google.com/">Contact Us</a></li>
		<li><a class="link" href="https://www.google.com/">About Us</a></li>
		<li><a href="login.php" class="login">Login</a></li>
	</ul>

	<fieldset>
	<div class="loginbox">
	
		
		<hr>
		
<form action="server.php" method="post">
		<center><h1>Register</h1></center>
		<div class="formdata">
			
			<label for="firstname">Firstname</label>
			<input type="text" placeholder="Enter firstname" name="username" required><br>
			
			<label for="lastname">Lastname</label>
			<input type="text" placeholder="Enter lastname" name="lastname" required><br><br>
			
			<label for="Gender">Gender</label>
			<select name="gender" name="gender" required>
				<option>Male</option>
				<option>Female</option>
			</select>
		
			<br><br>
		
			<label for="TP">Mobile Number</label>
			<input name="TP" type="text-box" pattern="[0-9]{10}$"  required><br />
		
			<label for="email">E-mail Address</label><br />
			<input placeholder="eg:-abc@xyz.com" name="email" type="email" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br />
			
			<label for="Address">Address</label><br />
			<input type="text" name="Address" rows="8" cols="47" required> <br />

			<label for="psw">Password </label><br />
			<input type="password" placeholder="Enter a password" id="pwd"  name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onkeypress="checkPass();" required>
		
			<div id="message">
				<p>A Password must contain a <b>lowercase</b> letter, a <b>uppercase</b> letter, a <b>number</b> and a minimum of <b>8 characters</b></p>
			</div>
		
			<label for="pwd1">Confirm Password </label><br />
			<input type="password" placeholder="Confirm password" name="pwd1" id="pwd1" required>
			<span id='message'></span><br />
			

		

			<input type="checkbox" name="check" id="check" onclick="enableButton()">
			<label id=lcheck for="check">By creating an account you agree to our <a href="Terms and Privacy.html">Terms & Privacy</a>.</label><br />
		

			<center><button id="submit" type="submit" name="Signup" disabled>SIGN UP</button>
			
			<p><a href="login.php">Have an account?Login</a></center>
			
		</div>
	</form>
	</div>
			
	
	<div class="footer">
		<p>Red Cloud.com</p>
	</div>
	
</body>
</html>