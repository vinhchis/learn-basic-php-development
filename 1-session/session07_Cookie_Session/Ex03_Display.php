<!DOCTYPE html>
<?php
#1. Start Sesssion
session_start();

#2. Get value from Ex02_Session, set into Session
$_SESSION['code'] = $_GET['txtCode'];

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Display</title>
    </head>
    <body>
        Are you sure to check:
        <span style="color: blue; font-size: 15pt">
            <?= $_SESSION['code']?> ? 
        </span>
        <p>
            <a href="Ex05_Action.php">Yes</a>
            <a href="Ex04_Session.php">No</a>
        </p>
        
    </body>
</html>
