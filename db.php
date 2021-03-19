<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dog_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE dogs (
        id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        d_name VARCHAR(30) NOT NULL,
        d_breed VARCHAR(30) NOT NULL,
        d_age INT(3) NOT NULL,
        d_address VARCHAR(50) NOT NULL,
        d_color VARCHAR(50) NOT NULL,
        d_height FLOAT(3, 2) NOT NULL,
        d_weight FLOAT(3, 2) NOT NULL)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>