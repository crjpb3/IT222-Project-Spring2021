<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="ProjectStyleSheet.css" />

    <script src="timingScript.js" type="text/javascript"></script>

    <title>Camera</title>
</head>
<body>
       
    <?php include 'Header.php';?>


    <div class="productDiv">
        <a href="Electronics.php"><p class="back"><symbol>&#60</symbol>BACK</p></a>

        <h3>DSLR Camera</h3>
        <table class="ptable">
            <tr>
                <td><img src="images/camera.jpg" class="bigProduct" /></td>
                <td class="bid">
                    <h4>Current Highest Bid:</h4>
                    <h5>Highest Bidder:</h5>
                    <br /><br />
                    <h4 id="text">Would you like to bid on this item?</h4>
                    <br />
                    <a class="btn btn-primary" href="BidForm.php" onclick="dateFunction()" id="button" target="blank">BID NOW!</a>
                    <br /><br />
                    <h5 id="time">This will bring you to a new page where you can fill out a form to begin bidding.</h5>
                    <h2 id="newtext" style="color:red; "></h2> 
                </td>
            </tr>
        </table>

        <div style="width:45%">
            <h4 class="text">Description:</h4>
            <p class="text">This DSLR camera is compact, easy to use, and verstile. Easily capture any moment from photos of outdoor sporting events to close-up 
            images of a flower. This camera features a water resistant body and comes with 2 lenses.</p>
        </div>

    </div>


        <?php include 'Footer.php';?>

</body>
</html>