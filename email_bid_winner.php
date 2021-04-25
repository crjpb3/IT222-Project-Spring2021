<?php
	//https://www.php.net/manual/en/function.mail.php was very helpful here
	require_once 'connection.php';
	
	$connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

	if(!$connection)
	{
		die("Unable to connect to MySQL: " . mysqli_connect_errno());
	}
	
	$query = $item_name = $first_name = $to = $subject = $message = '';
	$id = $_GET['id'];
	
	//Query for max bidder email
	$query = "SELECT BidderF_Name, BidderEmail FROM Bids WHERE BidAmount = (SELECT MAX(BidAmount) FROM Bids WHERE ItemID = $id)";
	$result = mysqli_query($connection, $query);
	
	if(!$result)
	{
		die("Database access failed: " . mysqli_error($connection));
	}
	
	$row = mysqli_fetch_assoc($result);
	$first_name = $row['BidderF_Name'];
	$to = $row['BidderEmail'];
	
	//Query for item name
	$query = "SELECT ItemName FROM Items WHERE ItemID = $id";
	$result = mysqli_query($connection, $query);
	
	if(!$result)
	{
		die("Database access failed: " . mysqli_error($connection));
	}
	
	$row = mysqli_fetch_assoc($result);
	$item_name = $row['ItemName'];
	
	$subject = $item_name . " Bid Result";
	$message = "Congratulations " . $first_name . "! You won the bid for the " . $item_name . "!";
	
	mail($to, $subject, $message);
	
	mysqli_close($connection);

?>