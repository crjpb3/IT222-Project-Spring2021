<?php
	require_once 'connection.php';
	
	$connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

	if(!$connection)
	{
		die("Unable to connect to MySQL: " . mysqli_connect_errno());
	}
	
	$html = $query = '';
	
	if(isset($_POST['submit']))
	{
		$email = $_POST['email'];
	
		$query = 'SELECT Items.ItemName, Bids.BidAmount FROM Items INNER JOIN Bids ON Items.ItemID = Bids.ItemID ORDER BY Items.ItemName';
		$result = mysqli_query($connection, $query);
	
		if(!$result)
		{
			die("Database access failed: " . mysqli_error($connection));
		}
	
		$html .= "<th>Item</th><th>Bid</th>";
		while($row = mysqli_fetch_assoc($result))
		{
			$html .= "<tr><td>" . $row['ItemName'] . "</td><td> $" . $row['BidAmount'] . "</td></tr>";
		}
	}
	
	
	mysqli_close($connection);
	
?>