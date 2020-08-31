<?php 

$servername = "stu.cpofma1ty9by.us-west-2.rds.amazonaws.com";
$username = "admin";
$password = "Nopassword123";
$dbName = "stu";

$conn = mysqli_connect($servername, $username, $password, $dbName);

	if (! $conn) {
		die('connection failed '.mysqli_connect_error());
	}