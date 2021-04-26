<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
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
                    <form method="post" action="...">
                        First Name:<input type="text" name="fname" />
                        <br /><br />
                        Last Name: <input type="text" name="lname"  />
                        <br /><br />
                        Email:     <input type="text" name="email"  />
                        <br /><br />
                        Bid:       <input type="text" name="bid"  />
                        <br /><br />
                        <input type="submit" name="submit" value="Submit" style="width: 20%;color: black;" />
                    </form>
                </td>
            </tr>
        </table>
    </div>

        <?php include 'Footer.php';?>

</body>
</html>