﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="ProjectStyleSheet.css" />

    <title>About Us</title>
</head>
<body>
    
    <?php include 'Header.php';?>


    <div class="productDiv">
        <div class="titleDiv">
            <h2>Shopping Cart</h2>
        </div>
        <h3 style="margin-left: 20px;">Your Products:</h3>

        <form>
            Please enter your email:     <input type="text" name="email" />
            <input type="submit" name="submit" value="Submit" style="width: 10%;color: black;" />
        </form>
        
        <table class="stable">

        <?php
        ?>

        </table>
    </div>

    <?php include 'Footer.php';?>

</body>
</html>
