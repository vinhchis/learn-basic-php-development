<!DOCTYPE html>
<?php
#1. Cookie parameters
$cookie_name = "color";
$cookie_value = "blue";
$cookie_time = 3600 * 24 * 10; // số giây của 10 ngày
//
#2. Set Cookie
//setcookie($cookie_name, $cookie_value, time() + $cookie_time);

#3. Clear Cookie
//setcookie($cookie_name, $cookie_value, time() - $cookie_time);
?>
<html>
    <head>
        <meta charset="UTF-8">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title>Cookie</title>
    </head>
    <body>
        <?php
        if (!isset($_COOKIE[$cookie_name])):
            echo "<div class='alert alert-info'> Welcome to my HomePage </div>";
        else:
            echo "<div class='alert alert-info'> <h3 style='color:{$_COOKIE[$cookie_name]}'> Thanks for comeback</h3> </div>";
        endif;
        ?>
    </body>
</html>
