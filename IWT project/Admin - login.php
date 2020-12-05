<?php

session_start();

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

	

if(isset($_POST['login'])){

    $uname = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from user where fname='".$uname."' and Password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['username'] = $uname;
            header('Location: Admin - category list.php.php');
        }else{
            echo "<script> alert('Invalid Username or Password ')</script>";
        }

    }

}
?>

<html>
<head>

<title> Admin Login </title>

<link rel = "stylesheet" type = "text/css" href = "styles/Admin - login.css">

</head>
<body>


<div class = "loginbox">
	<h2> Admin  Login </h2>
	<form>
	<p> Username: </p><br>
	<input type = "text" name = "username" placeholder = "Enter username" required>
	<p> Password: </p></br>
	<input type = "password" name = "password" placeholder = "Enter password" required >
	<br><br>
	<input type = "submit" name = "login" value = "Login" href="Admin - profile.html">
	<br>
	
	<hr>
	<h5><a href = "#"> Lost password ? </a></h5>
	</form>
</div>
</body>
</html>
