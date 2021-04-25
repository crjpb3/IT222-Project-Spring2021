<?php
	require_once 'connection.php';
	
	$connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
	
	if(!$connection)
	{
		die("Unable to connect to MySQL: " . mysqli_connect_errno());
	}
	
	$item1 = $item2 = $item3 = '';
	$query = $html = '';
	$dept = $_GET['dept'];
	
	$query = "SELECT ItemID, ItemName FROM Items WHERE DeptCode = '$dept'";
	
	$result = mysqli_query($connection, $query);
	
	if(!$result)
	{
		die("Database access failed: " . mysqli_error($connection));
	}
	
	$row = mysqli_fetch_assoc($result);
	$item1 = $row['ItemName'];
	$row = mysqli_fetch_assoc($result);
	$item2 = $row['ItemName'];
	$row = mysqli_fetch_assoc($result);
	$item3 = $row['ItemName'];
	
	mysqli_close($connection);
?>