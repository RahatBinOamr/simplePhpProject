<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rahat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE crud (
    id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(300) NOT NULL,
    lastname VARCHAR(300) NOT NULL,
    email VARCHAR(300) NOT NULL,
    gender VARCHAR(300),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if ($conn->query($sql) === TRUE) {
  echo "Table  created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>