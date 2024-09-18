<!DOCTYPE html>
<?php
error_reporting(0);
$sess_id = session_id();
if (empty($sess_id))
    session_start();
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}
$msg = "Number of times you checked this page in this 
session:" . $_SESSION['counter'];
echo $msg;
?>  
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p> 
            <a href="nextpg.php?id=<?php
            echo
            htmlspecialchars(session_id());
            ?>">Click this link to 
                continue<a> 
        </p> 
    </body>
</html>
