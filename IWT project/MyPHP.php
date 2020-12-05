<?php 

require "database.php";

$username=$_POST['username'];
$lastname=$_POST['lastname'];
$address=$_POST['Address'];
$TP=$_POST['TP'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$password=$_POST['psw'];
$repeatpassword=$_POST['pwd1'];

if($password !== $repeatpassword){
	echo "<script>alert('Password mismatch! Go back to register!!!')</script>";
	 exit();
	
}

$sql = "INSERT INTO user(fname, lname, address, TP, email, gender,Password)
VALUES('$username', '$lastname', '$address', '$TP', '$email', '$gender', '$password')";

if ($connect->query($sql)){
header("location: welcome.php");
}
else{
echo "Error: ". $sql ."
". $connect->error;
}
$connect->close();

?>