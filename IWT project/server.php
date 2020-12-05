<?php

	session_start();
	 
	//initialize variables
	$UserID = 0;
	$FirstName = "";
	$LastName = "";
	$Gender = "";
	$TelNo = "";
	$Email = "";
	$Address = "";
	$Password = "";

	
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
	
	
	//if save button is clicked 
	if (isset($_POST['Signup']))
	{
		$FirstName = $_POST['username'];
		$LastName = $_POST['lastname'];
		$Gender = $_POST['gender'];
		$TelNo = $_POST['TP'];
		$Email = $_POST['email'];
		$Address = $_POST['Address'];
		$Password = $_POST['psw'];
		
		if($FirstName !=''||$Password !='')
		{
			$query = "INSERT INTO user(userID, fname, lname, address, TP, email, gender, Password) 
			VALUES ('$UserID', '$FirstName','$LastName','$Address','$TelNo', '$Email','$Gender', '$Password')";
			
			mysqli_query($conn, $query);
			
			$_SESSION["msg"] = "upload successful";
			
			header('location: Admin - category list.php'); //redirect to Admin - category list page after inserting 
		}
	
		echo "<br/><br/><span> Data Inserted successfully...!!</span>";
	}
	
	//retrive records
	$results = mysqli_query($conn, "SELECT * FROM user");
	
	//delete records
	if (isset($_POST["Del"])) 
	{
		$UserID = $_POST["Del"];
		
		mysqli_query($dbname, "DELETE * FROM user WHERE UserID=$UserID");
		
		$_SESSION["msg"] = "Delete successful";
			
		header('location: Admin - category list.php'); //redirect to Admin - category list page after inserting 
	}		
	










	  
	
	
	
	
	
	
	
	
	
	mysqli_close($conn);
		
?>