<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

    <link rel="stylesheet" type="text/css" href="ProjectStyleSheet.css" />

    <title>Home</title>
</head>
<body>
        
    <?php include 'Header.php';?>


    <div class="productsDiv">
        <img src="images/logo4.png" style="display:block; margin-left:auto; margin-right:auto"/>
        <h4 style="text-align: center; color:gray;">The #1 bidding website in the US</h4>

        <h3>Browse your products:</h3>
        <hr />
        <table class="htable" style="font-size:25px; ">
            <tr>
                <td><a href="Electronics.php?dept=ELEC">ELECTRONICS</a></td>
                <td><a href="Appliances.php?dept=APPL">APPLIANCES</a></td>
            </tr>
            <tr>
                <td><a href="Clothing.php?dept=CLTH">CLOTHING</a></td>
                <td><a href="Jewelry.php?dept=JWL">JEWELRY</a></td>
            </tr>
        </table>
        <hr />
    </div>

    <?php include 'Footer.php';?>


</body>
</html>