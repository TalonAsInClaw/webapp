<html>
<body>
	<a href=requestAQuote.html> back </a>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cs3320";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "Connected successfully";




$sql = "
INSERT INTO fuelQuote (clientId, gallonsRequested, requestDate, deliveryDate, deliveryAddress, deliveryCity, deliveryState, deliveryZipCode, deliveryContactName, deliveryContactPhone, deliveryContactEmail, suggestedPrice, totalAmountDue)
VALUES (1,".$_POST["gallonsRequested"].",'1234-10-10','".$_POST["deliveryDate"]."','".$_POST["deliveryAddress"]."','".$_POST["deliveryCity"]."','".$_POST["deliveryState"]."','".$_POST["deliveryZipCode"]."','".$_POST["deliveryContactName"]."','".$_POST["deliveryContactPhone"]."','".$_POST["deliveryContactEmail"]."','".$_POST["suggestedPrice"]."','".$_POST["totalAmountDue"]."')";


if ($conn->query($sql) === TRUE) {
	echo "New record created!";
} else {
	echo "ERROR: " . $sql . "<br>" . $conn->error;
}
?>