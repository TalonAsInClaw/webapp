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

$sql = "SELECT clientId, fullName FROM clientInformation";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
	echo "<br> id: ". $row["clientId"]. " - Name: ". $row["fullName"];
}

?>