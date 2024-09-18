<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!--1. Xu ly khi nut submit chua duoc chon -->
        <?php
        if(!isset($_POST['btn'])):
            
        ?>
        <h1>Register Form</h1>
        <form action="Exx04_Agreement.php" method="post">
            <input type="checkbox" name="isOK">Agreement
            <hr> 
            <input type="submit" name="btn" value="Register">
        </form>
        <!--2. Xu ly khi nhan submit -->
        <?php
        else:
            //Neu checkbox chua duoc chon
       
            if(!isset($_POST['isOk'])):
        ?>
        <h4 style="color:red">Please, check Agreement</h4>
        <a href="Exx04_Agreement.php">Back to Register form</a>
        
        <?php
        else:
            echo '<H2>Welcome to my homepage</H2>';
        endif;
        endif;
        ?>
    </body>
</html>
