<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include 'bid_submit.php'; ?>
	<?php include 'product_info.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Bidding</title>

    <link rel="stylesheet" type="text/css" href="ProjectStyleSheet.css" />

</head>
<body>

    <?php include 'Header.php';?>

    <div class="productsDiv">
        <table class="ptable">
            <tr>
                <td class="bid">
                    <!--<h4>Current Highest Bid:</h4>-->
                    <h5>Enter your infomation in the following form to bid.</h5>
                    <br /><br />
                    <h4>Customer Information:</h4>
                    <form method="post">
						<?php echo $message ?></span><br><br>
                        <span style="color:red;">*</span>First Name:<input style="color: black;" type="text" name="fname" />
                        <br /><br />
                        <span style="color:red;">*</span>Last Name: <input style="color: black;" type="text" name="lname"  />
                        <br /><br />
                        <span style="color:red;">*</span>Email:     <input style="color: black;" type="text" name="email"  />
                        <br /><br />
                        <span style="color:red;">*</span>Bid(minimum $<?php echo number_format(($price * 1.10), 2); ?>):       <input style="color: black;" type="number" name="bid" step="0.01" min="<?php echo number_format($price * 1.10, 2); ?>"  />
                        <br /><br />
						<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
                        <input type="submit" name="submit" value="Submit" style="width: 20%;color: black;" />
                    </form>
                </td>
            </tr>
        </table>
    </div>
		<?php unset($first_name, $last_name, $email, $message); ?>
        <?php include 'Footer.php'; ?>

</body>
</html>