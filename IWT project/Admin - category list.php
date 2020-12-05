<?php include('server.php'); ?>

<!DOCTYPE HTML>
<html>
<head>

<title> Admin - category list </title>

<link rel = "stylesheet" type = "text/css" href = "styles/Admin - category list.css">
<link rel = "stylesheet" type = "text/css" href = "styles/background.css">

<script>

	function togglesidebar()
	{
		document.getElementById("sidebar"). classList.toggle("active");
	}
</script>

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

<section>

	 	
	 <div id = 'sidebar'>
		<div class = "toggle-btn" onclick = "togglesidebar()">
		<span> </span>
		<span> </span>
		<span> </span>
		</div>
				<ul>
					<li> <a href = "#" >Dashboard </a> </li>
					<li><a href = "files.php" >  Files   </a> </li>
					<li> <a href = "Photos.php" > Photos  </a></li>
					<li> <a href = "Audios.php" > Audios </a></li>
					<li> <a href = "Videos.php" > Videos</a></li>
					<li> <a href = "#" > Settings</a></li>
		</ul>
		</div>
	</div>

</section>		
		<!--<img src = "images/error.jpg" alt = "error" width = "1150" height = "500"*>-->
	
	

		
	<table>
		<tr>
			<th> <div class="card" style="width:120%;">
					<div class = "card-body1">
						<div class="w3-container">
						<p>Files</p>
						</div>
					<img src = "images/files.png" width = "100px" height = "100px" class="footer-color" margin = "20px">
				<hr>
				</div>
			</th>
			
			<th> <div class="card" style="width:120%">
					<div class = "card-body2">
						<div class="container">
						<p>Photos</p>
					</div>
					<img src = "images/photo.png" width = "80px" height = "80px" class="footer-color" margin-top = "20px">
				<hr>
				</div>
			</th>
			
			<th> <div class="card" style="width:120%;">					
					<div class = "card-body3">
						<div class="container">
						<p>Audios</p>
						</div>
					<img src = "images/audios.png" width = "80px" height = "80px" class="footer-color" margin = "20px">
				<hr>
				</div>
			</th>
		
			<th> <div class="card" style="width:120%;">	
						<div class = "card-body4">
						<div class="container">
						<p>Videos</p>
						</div>
					<img src = "images/videos.png" width = "80px" height = "80px" class="footer-color" margin = "20px">
				<hr>
				</div>
			</th>
		</tr>
	</table>
	
	<!-- session for display "upload successful" -->
	
	<?php if (isset($_SESSION["msg"])):; ?>
		<div class = "msg">
			<?php 
				echo $_SESSION["msg"];
			?>
		</div>
	<?php endif ?>

	
	
	<center>
		<table class ="dbtable">
			<thead>
				<tr class = "dbtr">
					<th> userID </th>
					<th> FirstName </th>
					<th> LastName </th>
					<th> Address </th>
					<th> Tel.No </th>
					<th> E-mail </th>
					<th> Gender </th>
					<th> Password </th>
					<th colspan = "2"> Action </th>
				</tr>
			</thead>
				
			<tbody>
			<?php while ($row = mysqli_fetch_array($results)){ ?>
				<tr class = "dbth">
					<td class = "dbtd" > <?php echo $row['userID']; ?> </td>
					<td class = "dbtd" > <?php echo $row['fname']; ?> </td>
					<td class = "dbtd" > <?php echo $row['lname']; ?> </td>
					<td class = "dbtd" > <?php echo $row['address']; ?> </td>
					<td class = "dbtd" > <?php echo $row['TP']; ?> </td>
					<td class = "dbtd" > <?php echo $row['email']; ?> </td>
					<td class = "dbtd" > <?php echo $row['gender']; ?> </td>
					<td class = "dbtd" > <?php echo $row['Password']; ?> </td>
					<td class = "dbtd" > <a class = "del_btn" href = "server.php?Del=<?php echo $row['UserID'];?>"> Remove </a> </td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</center>

	
		
		
		
					
					
			




























</body>
</html>
