<?php

$conn = new mysqli('localhost', 'root', '', "dbone");

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
} else {
	echo "Connection Successfull";

}

$sql = "INSERT INTO info (id, name, phone, email)
VALUES ('3', 'Steve', '565654333','john@example.com')";
//$conn->query($sql);
// // Create database
// $sql = "CREATE DATABASE myDB";
// if (mysqli_query($conn, $sql)) {
// 	echo "Database created successfully";
// } else {
// 	echo "Error creating database: " . mysqli_error($conn);
// }
// exit();
// // mysqli_close($conn);
// $sql = "INSERT INTO info (id, name, phone,email)
// VALUES ('1', 'Doe', '232323232','john@example.com')";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

?>