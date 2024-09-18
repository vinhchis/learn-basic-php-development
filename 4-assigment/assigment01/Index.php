<!DOCTYPE html>
<?php
include_once './DBConnect.php';
$query = "select * from customer";

$rs = mysqli_query($conn, $query);
$count = mysqli_num_rows($rs);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Index Page</title>
        <style>
            .add-link a {
                float:right;
                padding: 30px;
                font-weight: bold;
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
        <h1 align="center">Customer Information</h1>
        <div class="add-link">
            <a href="Add.php">Add New</a>

        </div>
        <table class="table table-bordered">
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th></th>
            </tr>
            <?php
            if ($count == 0):
                echo "<tr>No records </tr>";
            endif;
            ?>
            <?php
            while ($data = mysqli_fetch_array($rs)):
                ?>
                <tr>
                    <td><?= $data[0] ?></td>
                    <td><?= $data[1] ?></td>
                    <td><?= $data[2] ?></td>
                    <td><?= $data[3] ?></td>
                    <td>
                        <a href="Edit.php?code=<?= $data[0] ?>">Modify</a>
                    </td>
                </tr>
                <?php
            endwhile;
            mysqli_close($conn);
            ?>
        </table>
    </body>
</html>
