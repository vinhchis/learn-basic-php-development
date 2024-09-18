<!DOCTYPE html>
<?php
include_once './DBConnect.php';
if (isset($_GET['tableName'])):
    $tableName = $_GET['tableName'];
endif;

$query = "show columns from $tableName";

$rs = mysqli_query($conn, $query);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Details</title>
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
        <h1>DataBase Manager System</h1>
        <h2><?= $tableName ?> Details</h2>
        <a href="Create.php">Add New Data</a> |
        <a href="Index.php">Back to Table List</a>

        <table class="table table-bordered">
            <tr>
                <td align="right">Table Name:</td>
                <td>
                    <input name="txtTbName" readonly value="<?= $tableName ?>">
                </td>
            </tr>
        </table>
        <h2> Create three fields for table</h2>
        <table class="table table-bordered ">
            <tr bgcolor="#b9e9ed">
                <th>No</th>
                <th>Clolumn Name</th>
                <th>Data Type</th>
                <th>Null</th>
                <th>Contraint</th>

            </tr>

            <?php
            $i = 0;
            if ($rs->num_rows > 0):
                while ($row = mysqli_fetch_array($rs)):
                    ?>
                    <tr>
                        <td><?= ++$i ?></td>
                        <td>
                            <?= $row[0] ?>
                        </td>
                        <td>
                            <?= $row[1] ?>
                        </td>
                        <td>
                            <?= $row[2] ?>
                        </td>
                        <td>
                            <?= $row[3] ?>
                        </td>
                    </tr>
                    <?php
                endwhile;
            else:
                echo "0 results";
            endif;
            ?>

        </table>

    </body>
</html>

