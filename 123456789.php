<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "mydbs";

	$conn = new mysqli($servername, $username, $password , $database);
	if ($conn->connect_error) {
		echo "Connection Failed ";
	}
	else {
		echo "Connection Successfull ". "<br>";
	}

	$sql = "CREATE DATABASE mydbs";

	if ($conn->query($sql) === TRUE) {
		echo "Database crated successfull";
	}
	else{
		echo "Failed... " . "<br>";
	}

	$sql = "CREATE TABLE customers (
customerid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";

	if ($conn->query($sql) === TRUE) {
		echo "Table Created..." . "<br>";
	}
	else{
		echo "Error : " . $conn->error . "<br>";
	}



?>