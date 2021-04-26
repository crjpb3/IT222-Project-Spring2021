<?php

	require_once 'connection.php';

	$connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

	if(!$connection)
	{
		die("Unable to connect to MySQL: " . mysqli_connect_errno());
	}

	$first_name = $last_name = $email = $status = $query = $result = '';
	$message = "<span style='color:red;'>* Required Field";
	$bid_amount = 0.00;

	if(isset($_POST['submit']))
	{
		$first_name = $_POST['fname'];
		$last_name = $_POST['lname'];
		$email = $_POST['email'];
		$bid_amount = $_POST['bid'];
		$id = $_POST['id'];
		
		$query = "SELECT ItemStatus FROM Items WHERE ItemID = $id";
		$result = mysqli_query($connection, $query);
		
		if(!$result)
		{
			die("Database access failed: " . mysqli_error($connection));
		}
		
		$row = mysqli_fetch_assoc($result);
		$status = $row['ItemStatus'];
		
		$query = "INSERT INTO Bids(BidderF_Name, BidderL_Name, BidderEmail, BidAmount, ItemID) 
					VALUES('$first_name', '$last_name', '$email', $bid_amount, $id)";
		
		if (empty($first_name) || empty($last_name) || empty($email) || ($bid_amount < 1.00))
		{
			$message = "<span style='color:red;'>* Missing Requried Field(s)";
		}
		else if($status == 'SOLD')
		{
			$message = "<span style='color:orange;'>This item has already been sold!";
		}
		else if(mysqli_query($connection, $query))
			{	
				$message = "<span style='color:#00ff0d'>Your bid was successfully submitted!";
			}
	}

	mysqli_close($connection);

?>