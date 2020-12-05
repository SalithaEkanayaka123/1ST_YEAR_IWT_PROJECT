<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "red cloud";

$connect=mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
if(mysqli_connect_errno($connect))
{
	echo 'Failed to connect';
}

?>