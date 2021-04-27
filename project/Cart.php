<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include 'bid_list.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="ProjectStyleSheet.css" />

    <title>Bid Cart</title>
</head>
<body>
    
    <?php include 'Header.php';?>


    <div class="productDiv">
        <div class="titleDiv">
            <h2>Shopping Cart</h2>
        </div>
        <h3 style="margin-left: 10px;">Your Bids:</h3>

        <form method="post">
            Please enter your email:     <input type="text" name="email" />
            <input type="submit" name="submit" value="Submit" style="width: 10%;color: black;" />
        </form>
        
        <div style="height: 550px; overflow: scroll; margin-top: 20px;">
        <table class="table table-striped">

        <?php echo $html; ?>

        </table>
        </div>

    </div>

    <?php include 'Footer.php';?>

</body>
</html>
