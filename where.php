<?php
include 'connection.php';
$sql = "SELECT * FROM customers WHERE customerid='3'";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
	while ($row = $res->fetch_assoc()) {
		echo "id:" . $row["customerid"] . " - Name:" . $row["firstname"] . $row["lastname"] . " Email:" . $row["email"] . "<br>";
	}
}
else{
	echo "0 Result";
}
?>