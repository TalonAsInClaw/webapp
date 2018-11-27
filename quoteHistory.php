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

$sql = "SELECT clientId, quoteId, gallonsRequested, requestDate, deliveryDate, deliveryAddress, 
		deliveryCity, deliveryState, deliveryZipCode, deliveryContactName, deliveryContactPhone, 
		deliveryContactEmail, suggestedPrice, totalAmountDue FROM fuelQuote";
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>Client ID</th>
<th>Quote ID</th>
<th>Gallons Requested</th>
<th>Request Date</th>
<th>Delivery Date</th>
<th>Delivery Address</th>
<th>Delivery City</th>
<th>Delivery State</th>
<th>Delivery Zip Code</th>
<th>Delivery Contact</th>
<th>Contact Phone</th>
<th>Contact Email</th>
<th>Suggested Price</th>
<th>Total Amount Due</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['clientId'] . "</td>";
echo "<td>" . $row['quoteId'] . "</td>";
echo "<td>" . $row['gallonsRequested'] . "</td>";
echo "<td>" . $row['requestDate'] . "</td>";
echo "<td>" . $row['deliveryDate'] . "</td>";
echo "<td>" . $row['deliveryAddress'] . "</td>";
echo "<td>" . $row['deliveryCity'] . "</td>";
echo "<td>" . $row['deliveryState'] . "</td>";
echo "<td>" . $row['deliveryZipCode'] . "</td>";
echo "<td>" . $row['deliveryContactName'] . "</td>";
echo "<td>" . $row['deliveryContactPhone'] . "</td>";
echo "<td>" . $row['deliveryContactEmail'] . "</td>";
echo "<td>" . $row['suggestedPrice'] . "</td>";
echo "<td>" . $row['totalAmountDue'] . "</td>";
echo "</tr>";
}
echo "</table>";


while($row = $result->fetch_assoc()) {
	echo "<br> Client Id: ". $row["clientId"]. " - Quote Id: ". $row["quoteId"]. " - Gallons Requested: ". $row["gallonsRequested"];
}

?>