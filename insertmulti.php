<?php
include 'connection.php';
$sql = "INSERT INTO customers (firstname, lastname, email)
VALUES ('Homer', 'Simphon', 'homer@ex.com');";
$sql .= "INSERT INTO customers (firstname, lastname, email)
VALUES ('Pater', 'Griffin', 'peter@ex.com');";
$sql .= "INSERT INTO customers (firstname, lastname, email)
VALUES ('Setwie', 'GRriffin' ,'setwin@gmail.com')";



if ($conn->multi_query($sql) === TRUE) 	 {  #use [multi_ ]
	echo "New record is inserted";
}
else{
	echo "Error of inserting : " . $conn->error;
}
?>