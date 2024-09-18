<!DOCTYPE html>
<?php
    include_once './database.php';
?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<html>
    <head>
        <meta charset="UTF-8">
        <title>HomePage</title>
    </head>
    <body>
        <h2>Item List</h2>
        <table>
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Function</th>
                </tr>
                <tr>
                    <td><?= $code ?></td>
                    <td><?= $name ?></td>
                    <td><?= $price ?></td>
                    <td>Update | Delete</td>
                </tr>  
            </table>
        </table>
    </body>
</html>

