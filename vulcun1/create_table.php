<?php
$servername = "localhost";
$username = "root";
$password = "xxxxx";
$dbname = "vulcun1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} // sql to create table
$sql = "CREATE TABLE Users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
fullname VARCHAR(30) NOT NULL,
email VARCHAR(50),
city VARCHAR(20) NOT NULL
)";


if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
