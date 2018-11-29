<html>
	<head>

		<link rel="stylesheet" type="text/css" href="webAppStyle.css">

		<meta charset="ISO-8859-1">
		
		<style>
			
			table, th, td {
    			border: 1px solid black;
    			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    			font-size: 10;
    			border-collapse: collapse;
    			width: 100%;
			}

			td, th {
				border: 4px solid #ddd;
    			padding: 10px;
			}

			tr:nth-child(even) {background-color: #f2f2f2;}
			
			tr:hover {background-color: #ddd;}

			th {
    			padding-top: 12px;
    			padding-bottom: 12px;
    			text-align: left;
    			background-color: grey;
    			color: white;
			}



		</style>
		
	</head>

	<body>

		<header>
			<h2>Quote History</h2>
		</header>

		<section>

			<nav>
                <ul>
                	<li><a href="LandingPage.html">Home</a></li>
		        	<li><a href="clientInfo.php">Client Information</a></li>
		        	<li><a href="requestAQuote.html">Request a Quote</a></li>
                </ul>
            </nav>
			
			<article>

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
				
				echo "<table class='quotes'>
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
					</tr>
					";

				$sql = "SELECT clientId, quoteId, gallonsRequested, requestDate, deliveryDate, deliveryAddress, 
						deliveryCity, deliveryState, deliveryZipCode, deliveryContactName, deliveryContactPhone, 
						deliveryContactEmail, suggestedPrice, totalAmountDue FROM fuelQuote";

				$result = $conn->query($sql);

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

				while($row = $result->fetch_assoc()) {
					echo "<br> Client Id: ". $row["clientId"]. " - Quote Id: ". $row["quoteId"]. " - Gallons Requested: ". $row["gallonsRequested"];
				}
		
				?>
				</table>
			</article>
		</section>
	</body>
</html>