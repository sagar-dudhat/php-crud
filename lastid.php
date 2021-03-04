<?php
include 'insert.php'; 
if ($conn->query($sql) === TRUE) {
	$last_id = $conn->insert_id;
	echo "<br>New record created successfully. Last inserted id is :" . $last_id;
}
else{
	echo "Error" . $sql . "<br>" . $conn->error;
}
?>