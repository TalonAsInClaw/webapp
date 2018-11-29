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
			<h2>Client Information</h2>
		</header>

		<section>

			<nav>
                <ul>
                	<li><a href="LandingPage.html">Home</a></li>
		        	<li><a href="quoteHistory.php">Quote History</a></li>
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

				$sql = "SELECT clientId, fullName FROM clientInformation";
				$result = $conn->query($sql);

				while($row = $result->fetch_assoc()) {
					echo "<br> id: ". $row["clientId"]. " - Name: ". $row["fullName"];
				}

				?>
			</article>
		</section>
	</body>
</html>