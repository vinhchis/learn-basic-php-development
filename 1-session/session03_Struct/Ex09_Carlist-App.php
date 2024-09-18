<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
 <?php
        include_once './Ex06_AssociateArray.php';
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <h1>Car List</h1>
        <table class="table table-bordered table-hover">
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Price</th>
                <th>Function</th>
            </tr>
            <?php
                foreach($cars as $key => $value):
                    echo '<tr>';
                    foreach ($value as $data):
                        echo '<td>' . $data . '</td>';
                    endforeach;
                    echo '<td>Update | Delete</td>';
                    echo '</td>';
                endforeach;
            ?>
        </table>
    </body>
</html>
