<?php
$conn = new mysqli("localhost", "root", "", "db");

if ($conn->connect_error) {
	die("Connection Failed : " . $conn->connect_error);
}

$sql = "DELETE FROM customers WHERE customerid='9'";

if ($conn->query($sql) === TRUE) {
	echo "Table Record was deleted.";
}
else{
	echo "Error :" . $conn->error;
}
?>