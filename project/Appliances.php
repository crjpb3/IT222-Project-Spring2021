﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include 'product_listing.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Appliances</title>

    <link rel="stylesheet" type="text/css" href="ProjectStyleSheet.css" />

</head>
<body>
        
    <?php include 'Header.php';?>

    <div class="productsDiv">
        <div class="titleDiv">
            <h2>APPLIANCES</h2>
        </div>
        <table>
            <!--make styling class for this table-->
            <tr>
                <td style="padding:20px">
                    <div class="product" style="background-image: url('images/oven.jpg'); background-size: cover">
                        <div class="btnDiv" style="background-color:transparent">
                            <a class="btn btn-primary" href="oven.php?id=10">BID NOW!</a>
                        </div>
                    </div>
                    <div class="descDiv">
                        <p><?php echo $item1; ?></p>
                    </div>
                </td>
                <td style="padding:20px">
                    <div class="product" style="background-image: url('images/microwave.jpg'); background-size: cover">
                        <div class="btnDiv" style="background-color:transparent">
                            <a class="btn btn-primary" href="microwave.php?id=11">BID NOW!</a>
                        </div>
                    </div>
                    <div class="descDiv">
                        <p><?php echo $item2; ?></p>
                    </div>
                </td>
                <td style="padding:20px">
                    <div class="product" style="background-image: url('images/blender.jpg'); background-size: cover">
                        <div class="btnDiv" style="background-color:transparent">
                            <a class="btn btn-primary" href="blender.php?id=12">BID NOW!</a>
                        </div>
                    </div>
                    <div class="descDiv">
                        <p><?php echo $item3; ?></p>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <?php include 'Footer.php';?>


</body>
</html>