<!DOCTYPE html>
<?php
        // put your code here
  ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Create Item</title>
    </head>
    <body>
        <h1>Create Item</h1>
        <form action="Ex01_ReadItem.php" method="get">
            <table>
                <tr>
                    <td>Code:</td>
                    <td><Input name="txtCode" autofocus ></td>

                </tr>
                <tr>
                    <td>Name:</td>
                    <td><Input name="txtName" ></td>

                </tr>
                <tr>
                    <td>Price:</td>
                    <td><Input name="txtPrice" ></td>

                </tr>
                <tr>
                    <td></td>
                    <td><Input type="submit" value="Add new" class="btn btn-primary" ></td>

                </tr>
            </table>
        </form>
    </body>
</html>
