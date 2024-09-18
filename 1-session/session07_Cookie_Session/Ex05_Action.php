<!DOCTYPE html>
<?php
#1. Start Sesssion
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex04_Session</title>
    </head>
    <body>
        <h1>
            Administrator Control Pannel
        </h1>
        Products:
        <span style="color: blue; font-size: 15pt">
            <?= $_SESSION['code'] ?> ? 
        </span>
        <br>
        <a href="Ex06_CheckOut.php">Check Out</a>
        <h3>Data manipulation Action:</h3>
        <a href="#">Update</a>
        <a href="#">Delete</a>


    </body>
</html>

