<?php
include 'connection.php';
$sql = "INSERT INTO customers (firstname, lastname, email) 
 VALUES ('HOMER', 'simpson', 'homer@example.com'),
		('Peter', 'Griffin', 'peter@ex.com'),
		('Setwie', 'Griffin', 'Setwie@gmail.com'),
		('Brian', 'Griffin', 'Brian@gmail.com'),
		('Cosmo', 'Kramer', 'cosmo@gamil.com')";

if ($conn->query($sql) === TRUE) {
	echo "New Record Inserted";
}
else{
	echo "Error of inserting." . $conn->error;
}
?>

