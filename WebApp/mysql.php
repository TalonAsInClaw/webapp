<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";




$sql = "

INSERT INTO clientInformation (fullName, address, city, state, zipCode, phone, email)
VALUES ('Talon Sjostrom', '123 Main Street', 'Austin', 'TX', '78701', '2101234567', 'testemail@test.com')";

if ($conn->query($sql) === TRUE) {
	echo "New record";
} else {
	echo "ERROR: " . $sql . "<br>" . $conn->error;
}
?>