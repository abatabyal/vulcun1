<?php
$servername = "localhost";
$username = "root";
$password = "xxxxx";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

function rand_str($num_char)
{
	
	$char="";
	for($i = 0; $i<$num_char; $i++)
	{
		$num = rand(97, 122);
		$char .= chr($num);

	}
	return $char;
}
	$sql = "";

for ($i = 1; $i <= 10000000; $i++) 
{
	$id = $i;
	$fname = rand_str(7)." ".rand_str(7);
	$email = rand_str(10)."@".rand_str(4).".com";
	$city = rand_str(10);
	
	$sql = "INSERT INTO testUsers (id, fullname, email, city)
	 VALUES('" .$id. "','" .$fname. "','" .$email. "','" .$city. "');";

	if ($conn->query($sql) === TRUE) {
	    $percent_Done = $i/100000*100;
	    $per_str = $percent_Done . "% Done \n";
	    
	    echo $per_str;
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
 
	

$conn->close();
?>
