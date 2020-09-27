<?php
//Example of Prepared statements 

// Create connection of database
$conn = new mysqli("localhost", "db_user", "db_password", "db_name");

// Check connection of database
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//Typical query to view database
$query = "SELECT * FROM users WHERE uid= '$username' AND passwd='$pwd'";

// set parameters
$username="Bob"; //Example of malicious input: admin';--       --> this would not only bypass the password verification but as well as having the privileges of administrator.
$pwd="bob123";

//execute the query
$result=$mysqli_query($conn, $query) or die("Cannot execute sql.");

//close database connection
$conn->close();
?>