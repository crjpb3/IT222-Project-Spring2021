<?php
	
	require_once 'connection.php';
	
	$connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
	
	if(!$connection)
	{
		die("Unable to connect to MySQL: " . mysqli_connect_errno());
	}
	
	$query = $name = $description = '';
	$price = 1.00;
	$id = $_GET['id'];
	
	//Querying for item name and description
	$query = "SELECT ItemName, ItemDescr FROM Items WHERE ItemID = $id";
	
	$result = mysqli_query($connection, $query);
	
	if(!$result)
	{
		die("Database access failed: " . mysqli_error($connection));
	}
	
	$row = mysqli_fetch_assoc($result);
	$name = $row['ItemName'];
	$description = $row['ItemDescr'];
	
	//Querying for the current highest bid
	$query = "SELECT MAX(BidAmount) FROM Bids WHERE ItemID = $id";
	
	$result = mysqli_query($connection, $query);
	
	if(!$result)
	{
		die("Database access failed: " . mysqli_error($connection));
	}
	
	$row = mysqli_fetch_assoc($result);
	$price = $row['BidAmount'];
	
	mysqli_close($connection);
?>