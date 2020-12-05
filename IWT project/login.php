<?php
   include("database.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($connect,$_POST['username']);
      $mypassword = mysqli_real_escape_string($connect,$_POST['pwd']); 
      
      $sql = "SELECT userID FROM user WHERE fname = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($connect,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
		  echo "<script>alert('Your Login Name or Password is invalid')</script>";
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE HTML>
<head>
	<title> Red Cloud:Login   </title>
    <link rel = "icon" type = "image/ico" href = "images/Favicon.png">	
	<link rel="stylesheet" type="text/css" href="styles/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="src/js/login.js"> </script>
</head>
	
<body>
	<div class="header" >
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
		
			<li><a class="link" href="contactus.html">Contact Us</a></li>
			<li><a class="link" href="aboutus.html">About Us</a></li>
			<li><a href="Reg.php" class="signup">Signup</a></li>
	</ul>

	<fieldset class="loginbox">

		<center><form method="POST" action="">

			<h1>Login</h1><br />

			<div class="imgcontainer">
				<img src="images/user.jpg" height="100px" alt="Avatar" class="avatar">
			</div>

			<label for="username" class="labl">Username</label><br />
			<input type="text" placeholder="Enter username or email" name="username" required><br />

			<label for="pwd" class="labl">Password </label><br />
			<input type="password" placeholder="Enter password" name="pwd" required><br /> 
			
			<input type="checkbox" name="check" id="check">
			<label id=lcheck for="check">Keep me signed in.</label><br />

			<a href="fgtpwd.html">Forgot your password?</a><br /><br />
			
			<button type="submit" name="login" class="lgn">LOGIN</button><br><br />
			<button type="reset"  class="ccl">CANCEL</button><br /><br />


			No account?<a value="Sign up?" href="Reg.php">  Sign up</a>
		</form></center>
	</fieldset>

	
	
	<div class="footer">
		<p>Red Cloud.com</p>
	</div>

</body>