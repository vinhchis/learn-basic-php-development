<!DOCTYPE html>
<?php
#1. Start Sesssion
session_start();

#1. Database Information
$server = "localhost"; //default port 3306
$account = "root";
$password = "";
$database = "stronghold";


#2. database connect
$conn = mysqli_connect($server, $account, $password, $database);
$query = "select * from Item";
$rs = mysqli_query($conn, $query);
$count = mysqli_num_rows($rs);

$data = mysqli_fetch_array($rs);

mysqli_close($conn);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex04_Session</title>
    </head>


    <body>
        <form action="Ex03_Display.php" method="get">
            Item:
            <select id="code" name="txtCode">
                <?php
                while ($data = mysqli_fetch_array($rs)):
                    ?>
                    <option value="<?= $data[0] ?>'"><?= $data[1] ?></option>
                    <?php
                endwhile;
                ?>
            </select>
            <input type="submit" value="check" name="btnCheck">
        </form>
    </body>



</html>
