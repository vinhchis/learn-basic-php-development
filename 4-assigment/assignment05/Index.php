<!DOCTYPE html>
<?php
include_once './DBConnect.php';
$query = "show tables";

$rs = mysqli_query($conn, $query);
$count = mysqli_num_rows($rs);


?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Index</title>
        <style>
            h2 {
                color: graytext;
                font-style: italic;
            }
        </style>
    </head>
    <body>
        <?php
        if (isset($_GET['msgErr'])):
            echo "<div class='alert alert-warning'> {$_GET['msgErr']} </div>";
        elseif (isset($_GET['msgOK'])):
            echo "<div class='alert alert-info'> {$_GET['msgOK']} </div>";
        endif;
        ?>
        <h1>Database Management System</h1>
        <h2>Table List in database</h2>
        <a href="Create.php" >Create Table</a>
        <table class="table table-bordered">
            <tr bgcolor="#b9e9ed">
                <th>No</th>
                <th>Table Name</th>
                <th>Function</th>
            </tr>
            <?php
            if ($count > 0):
                $i = 1;
                while ($row = mysqli_fetch_array($rs)):
                    ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $row[0] ?></td>
                        <td>
                            <a href="Details.php?tableName=<?= $row[0] ?>">Details </a>|
                            <a href="Drop.php?tName=<?= $row[0] ?>">Drop Table</a>
                        </td>
                    </tr>
                    <?php
                endwhile;
            else:
                echo '<tr><td colspan="3">' . 'No records'. '</td></tr>';
            endif;
            ?>
        </table>
    </body>
</html>
