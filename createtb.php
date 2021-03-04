<?php
	
	include 'connection.php';
$sql = "CREATE TABLE customers (
customerid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";

if ($conn->query($sql) === TRUE){
	echo "Table Created.<br>";
}
else{
	echo "Something Wrong! <br>" . $conn->error . "<br>";
}
?>