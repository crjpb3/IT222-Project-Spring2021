<?php

	require_once 'connection.php';

	$connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

	if(!$connection)
	{
		die("Unable to connect to MySQL: " . mysqli_connect_errno());
	}

	$first_name = $last_name = $email = $query = $message = '';
	$bid_amount = 1.00;
	$id = $_GET['id'];
	$status = $_GET['status'];

	if(isset($_POST['submit']))
	{
		$first_name = $_POST['fname'];
		$last_name = $_POST['lname'];
		$email = $_POST['email'];
		$bid_amount = $_POST['bid'];
		$query = "INSERT INTO Bids(BidderF_Name, BidderL_Name, BidderEmail, BidAmount, ItemID) 
					VALUES('$first_name', '$last_name', '$email', $bid_amount, $id)";
		
		if(mysqli_query($connection, $query))
		{
			$message = "<br>Your bid was successfully submitted!";
		}
		else if($status == 'SOLD')
		{
			$message = "<br>This item has already been sold!";
		}
		else
		{
			$message = "<br>Error: " . mysqli_error($connection);
		}
	}

	mysqli_close($connection);

?>