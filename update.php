<?php

$conn = new mysqli("localhost", "root", "", "db"); 
if ($conn->connect_error) {
	die("Connection Failed : " . $conn->connect_error);
}

$sql = "UPDATE customers SET firstname='SP', lastname='Doe' where customerid='10'";

if ($conn->query($sql) === TRUE) {
	echo "Record Updated Successfully";
}else{
	echo "Error Of Updating : " . $conn->error;
}

?>