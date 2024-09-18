<!DOCTYPE html>
<?php
#1. Check submit button
if(isset($_POST['btn'])):
    echo '<div class="alert alert-default">Submit Button is clicked</div>';
endif;
#2. Check Form Method
if($_SERVER['REQUEST_METHOD']=='POST'):
    echo '<div class="alert alert-info">Data is processing...</div>';
endif;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <form method="post">
            Click to submit button:
            <input type="submit" name="btn" value="check" class="btn btn-primary">
            
        </form>
    </body>
</html>
