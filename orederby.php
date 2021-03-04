<?php
$conn = new mysqli("localhost", "root", "", "db");

if ($conn->connect_error) {
	die("Connection Failed : ". $conn->connect_error);
}



$sql = "SELECT * FROM customers ORDER BY customerid";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
	while ($row = $res->fetch_assoc()) {
		echo "id: " . $row["customerid"] . " - Name: " . $row["firstname"] . " - lastname: " . $row["lastname"] . "<br>";
	}
}else{
	echo "0 result";
}


?>