<?php
$conn = new mysqli("localhost", "root", "");
if($conn->connect_error){
	die("Connnection Failed.<br>" . "Error : " . $conn->$connect_error);
}

$sql = "CREATE DATABASE scl";
if ($conn->query($sql) === TRUE) {
	echo "Database created<br>";
}
else{
	echo "Database Failed<br>" . "Error : " . $conn->error;
}

$sql = "CREATE TABLE class(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
email VARCHAR(40)
)";
if ($conn->query($sql) === TRUE) {
	echo "Table Created<br>";
}else{
	echo "<br>Table not created<br>" . "Error : " . $conn->error;
}

$sql = "INSERT INTO class (Firstname, lastname, email) 
VALUES()";


?>