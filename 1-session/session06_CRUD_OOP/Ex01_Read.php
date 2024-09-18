<!DOCTYPE html>
<?php
include_once "./Item.php";
#Access class Item
$item = new Item();
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title>Read Items</title>
    </head>
    <body>  
          <?php
            if (isset($_GET['msgErr'])):
                echo "<div class='alert alert-warning'> {$_GET['msgErr']} </div>";
            elseif (isset($_GET['msgOK'])):
                echo "<div class='alert alert-info'> {$_GET['msgOK']} </div>";
            endif;
            ?>
        <div class="container">
            <h1>List Item</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th colspan="2">Function</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $fields = $item->readData();
                    foreach ($fields as $data):
                        ?>
                        <tr>
                            <td><?= $data[0] ?></td>
                            <td><?= $data[1] ?></td>
                            <td><?= $data[2] ?></td>
                            <td>
                                <a href="Ex03_Update.php?code=<?= $data[0] ?>">Update</a>
                            </td>
                            <td>
                                <a href="Ex04_Delete.php?code=<?= $data[0] ?>" 
                                   onclick="return confirm('Are you sure to delete ?');"
                                   >
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>

    </body>
</html>
