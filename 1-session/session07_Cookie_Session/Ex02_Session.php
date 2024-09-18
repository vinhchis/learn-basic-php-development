<!DOCTYPE html>
<?php
#1. Start session
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Session</title>
    </head>
    <body>
        <form action="Ex03_Display.php" method="get">
            Item: <input name="txtCode" value="RKSK-B" readonly>
            <input type="submit" value="check">
        </form>
    </body>
</html>
