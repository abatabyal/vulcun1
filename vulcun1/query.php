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
    
} 

$sql = "SELECT fullname FROM testUsers  WHERE fullname LIKE '%john%'";

if ($conn->query($sql) === TRUE) {
    echo "Search Complete";
} else {
    echo "Error Computing Search" . $conn->error;
}

$conn->close();
?>
