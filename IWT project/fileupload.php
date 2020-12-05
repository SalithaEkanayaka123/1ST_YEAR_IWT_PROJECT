<?php
	include 'server.php';
?>

<?php
	
	$Type = $_POST["fileToUpload"];
	$URL = $_POST["submit"];
	
	$sql = "INSERT INTO user(userID, fname, lname, address, TP, email, gender, Password) 
	VALUES ('$UserID', '$FirstName','$LastName','$Address','$TelNo', '$Email','$Gender', '$Password')";

	if (isset($_POST['submit']))
	{
		header('Location: userAccount.php');
	}
	
	else
	{
		echo "ERROR, Please Try Again!";
    }
    
    ?>