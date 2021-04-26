<?php
	
	require_once 'connection.php';
	
	$connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
	
	if(!$connection)
	{
		die("Unable to connect to MySQL: " . mysqli_connect_errno());
	}
	
	$query = $bidder_name = $item_name = $description = $status = '';
	$price = 1.00;
	$id = $_GET['id'];
	
	//Querying for item name and description
	$query = "SELECT ItemName, ItemDescr, ItemStatus FROM Items WHERE ItemID = $id";
	
	$result = mysqli_query($connection, $query);
	
	if(!$result)
	{
		die("Database access failed: " . mysqli_error($connection));
	}
	
	$row = mysqli_fetch_assoc($result);
	$item_name = $row['ItemName'];
	$description = $row['ItemDescr'];
	
	if($status == 'SOLD')
	{
		$item_name = $description = '<span style="color:red;">SOLD</span>'; 
	}
	
	//Querying for the current highest bid and bid user
	$query = "SELECT BidderF_Name, BidderL_Name, BidAmount FROM Bids WHERE 
				BidAmount = (SELECT MAX(BidAmount) FROM Bids WHERE ItemID = $id)";
	
	$result = mysqli_query($connection, $query);
	
	if(!$result)
	{
		die("Database access failed: " . mysqli_error($connection));
	}
	
	$row = mysqli_fetch_assoc($result);
	$bidder_name = $row['BidderF_Name'] . " " . $row['BidderL_Name'];
	
	if($bidder_name == " ")
		$bidder_name = "It could be you! Bid now!";

	$price = $row['BidAmount'];
	if(empty(trim($price)))
		$price = 1.00;
	
	mysqli_close($connection);
?>