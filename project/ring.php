<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include 'product_info.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="ProjectStyleSheet.css" />

    <script src="timingScript.js" type="text/javascript"></script>

    <title>Ring</title>
</head>
<body>
        
    <?php include 'Header.php';?>


    <div class="productDiv">
        <a href="Jewelry.php?dept=JWL"><p class="back"><symbol>&#60</symbol>BACK</p></a>

        <h3>Diamond Ring</h3>
        <table class="ptable">
            <tr>
                <td><img src="images/ring.jpg" class="bigProduct" /></td>
                <td class="bid">
                    <h4>Starting Bid: <b style="font-size: 25px">$1</b></h4>
                    <br /><br />
                    <h4 id="text">Would you like to bid on this item?</h4>
                    <br />
                    <a class="btn btn-primary" href="BidForm.php?id=9" onclick="dateFunction()" id="button" target="blank">BID NOW!</a>
                    <br /><br />
                    <h5 id="time">This will bring you to a new page where you can fill out a form to begin bidding.</h5>
                    <h2 id="newtext" style="color:red; "></h2> 
                </td>
            </tr>
        </table>

        <div style="width:45%">
            <h4 class="text">Description:</h4>
            <p class="text"><?php echo $description; ?></p>
        </div>

    </div>


        <?php include 'Footer.php';?>

</body>
</html>