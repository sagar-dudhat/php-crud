<?php
	$conn = new mysqli("localhost", "root", "", "db");
	
	if($conn->connect_error){
		echo "Connection failed : " . $conn->connect_error;
	}
	else{
		echo "Connection successfull<br>";
	}
?>