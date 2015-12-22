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

$sql = "CREATE INDEX FULLNAME ON testUsers (fullname);";

if ($conn->query($sql) === TRUE) {
    echo "Indexing Complete";
} else {
    echo "Error Indexing" . $conn->error;
}

$conn->close();
?>
