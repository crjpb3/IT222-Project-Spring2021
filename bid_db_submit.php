<?php

require_once 'connection.php';

$connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

if(isset($_POST['']))
{
	$first_name = $_POST[''];
	$last_name = $_POST[''];
	$email = $_POST[''];
	$bid_amount = $_POST[''];
	$query = "INSERT INTO Bids('BidderF_Name', 'BidderL_Name', 'BidderEmail', 'BidAmount') VALUES('$first_name', '$last_name', '$email', '$bid_amount')";
	
	if(mysqli_query($connection, $query))
	{
		echo "<br>"; echo "Your bid was successful!";
	}
	else
	{
		echo "<br>"; echo "Error: " . mysqli_error($connection);
	}
}

mysqli_close($connection);

?>