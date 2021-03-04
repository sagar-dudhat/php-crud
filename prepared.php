<?php
include 'connection.php';
$stmt = $conn->prepare("INSERT INTO customers (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

$firstname = "John";
$lastname = "Doe";
$email = "John@gmail.com";
$stmt->execute();

$firstname  = "Mary";
$lastname = "Moe";
$email = "mary@gmail.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "juliey@gmail.com";
$stmt->execute();

echo "New record created successfully";

$stmt->close();
$conn->close();

?>