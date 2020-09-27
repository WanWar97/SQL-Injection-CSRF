<?php
//Example of Prepared statements 

// Create connection of database
$conn = new mysqli("localhost", "db_user", "db_password", "db_name");

// Check connection of database
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare a query template
$stmt = $conn->prepare("SELECT * FROM users WHERE uid=?");

//bind the parameters
$stmt->bind_param("s", $username);

// set parameters and execute
$username="Bob";

//execute the prepared statements
$stmt->execute();

//close the prepared statements
$stmt->close();

//close database connection
$conn->close();
?>