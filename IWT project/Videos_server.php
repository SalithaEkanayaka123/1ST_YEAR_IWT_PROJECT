<?php

	session_start();
	 
	//initialize variables
	$FileID = 0;
	$F_Name = "";
	$F_size = ""; 
	$F_type = "";

	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "red_cloud";
	
	//connect to database
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	
	// Check connection
	if (!$conn)
		{
			die("Connection failed: " . mysqli_connect_error());
		}
	
	/*
	else
	{
		echo "Connected successfully<br>";
	}*/
	
	
	
	//retrive records
	$results = mysqli_query($conn, "SELECT user.userID, user.fname, file.fID, file.name, file.size, file.type 
	FROM `user`, `file` WHERE (file.type = '.mp4') AND user.userID = file.userID");
	

			
	










	  
	
	
	
	
	
	
	
	
	
	mysqli_close($conn);
		
?>