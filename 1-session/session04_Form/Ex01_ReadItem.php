<!DOCTYPE html>
<?php
//Get value from Ex01_CreateItem.php
$code = $_GET['txtCode'];
$name =$_GET['txtName'];
$price = $_GET['txtPrice'];
        
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>ReadItem</title>
    </head>
    <body>
        <h1>Item List</h1>
        <table class="table table-bordered table-hover">
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Price</th>
                <th>Function</th>
            </tr>
            <tr>
                <td><?=$code?></td>
                <td><?=$name ?></td>
                <td><?=$price ?></td>
                <td>
                    <a href="#">Update</a>
                    <a href="#">Delete</a>
                    
                </td>
            </tr>
        </table>
    </body>
</html>
