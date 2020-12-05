<?php include('Photos_server.php'); ?>

<!DOCTYPE HTML>
<html>
<head>

<title> Photos </title>

<link rel = "stylesheet" type = "text/css" href = "styles/Photos.css">
<link rel = "stylesheet" type = "text/css" href = "styles/background.css">

<script>

	function togglesidebar()
	{
		document.getElementById("sidebar"). classList.toggle("active");
	}
</script>

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
<section>

	 	
	 <div id = 'sidebar'>
		<div class = "toggle-btn" onclick = "togglesidebar()">
		<span> </span>
		<span> </span>
		<span> </span>
		</div>
				<ul>
					<li> <a href = "Admin - category list.php" >Dashboard </a> </li>
					<li><a href = "files.php" >  Files   </a> </li>
					<li> <a href = "Photos.php" > Photos  </a></li>
					<li> <a href = "Audios.php" > Audios </a></li>
					<li> <a href = "Videos.php" > Videos</a></li>
					<li> <a href = "#" > Settings</a></li>
		</ul>
		</div>
	</div>


<center>
		<table class ="dbtable">
			<thead>
				<tr class = "dbtr">
					<th > U ID </th>
					<th > U Name </th>
					<th > F ID </th>
					<th > F Name </th>
					<th > F Size </th>
					<th > F Typee </th>
				</tr>
			</thead>
				
			<tbody>
			<?php while ($row = mysqli_fetch_array($results)){ ?>
				<tr class = "dbth">
					<td class = "dbtd" > <?php echo $row['userID']; ?> </td>
					<td class = "dbtd" > <?php echo $row['fname']; ?> </td>
					<td class = "dbtd" > <?php echo $row['fID']; ?> </td>
					<td class = "dbtd" > <?php echo $row['name']; ?> </td>
					<td class = "dbtd" > <?php echo $row['size']; ?> </td>
					<td class = "dbtd" > <?php echo $row['type']; ?> </td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</center>


</body>
</html>