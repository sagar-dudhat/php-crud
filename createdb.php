<?php
	
	include 'connection.php';

	$sql = "CREATE DATABASE db";

	if ($conn->query($sql) === TRUE) {
		echo "Database Created Succesfully.<br>";
	}
	else{
		echo "Something Wrong!<br>". $conn->error . "<br>";
	}
	
include 'close.php';
	
?>