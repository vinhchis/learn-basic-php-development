<!DOCTYPE html>
<?php
include_once './DBConnect.php';
#Search
if (!isset($_GET['id'])):
    echo "Nothing to display";
else:
    $id = $_GET['id'];
    $query = "select * from phonebrand where PBID={$id}";
    $rs = mysqli_query($conn, $query);
endif;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <h1>Brand Details</h1>
        <table class="table table-bordered">
            <?php
            while ($data = mysqli_fetch_array($rs)):
                ?>
                <tr>
                    <td>
                        <img src=".<?= $data[3] ?>" width="200px"/>
                    </td>
                    <td width="50%">
                        <h3>
                            <?php
                            echo 'Name: ' . $data[1] . '<p>';
                            echo 'Country: ' . $data[2] . '<p>';
                            ?>
                        </h3>

                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a href="IndexPage.php">Back to Index</a>
                        <a href="#">Download Logo</a>
                    </td>
                </tr>
                <?php
            endwhile;
            ?>
        </table>
    </body>
</html>
