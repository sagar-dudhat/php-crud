<?php
include 'connection.php';
$sql = "SELECT * FROM customers";
$res = $conn->query($sql);

if ($res->num_rows > 0)
{
	while($row = $res->fetch_assoc())
	{
			echo "id: ".$row["customerid"]." - name: ".$row["firstname"]."<br>";
	}	
}else{
	echo "0 return";
}
?>