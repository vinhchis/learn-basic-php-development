<!DOCTYPE html>
<?php
include_once './DBConnect.php';
if (isset($_POST['btnAdd'])):
    $name = $_POST['txtName'];
    $site = $_POST['txtSite'];
    $query = "insert into brands (Name, Link) VALUES ('{$name}', '{$site}')";
    $rs = mysqli_query($conn, $query);
    if (!$rs):
        header('location: Read.php?msgOK="Nothing happen"');
    else:
        header('location: Read.php?msgOK="Data is saved to databases"');
    endif;
    
endif;
mysqli_close($conn);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create A Brand</title>
    </head>
    <body>
        <h2>New Brand Form</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <th><label for="txtName">Name</label></th>
                    <td>
                        <input type="text" id="txtName" name="txtName">
                    </td>
                </tr>
                <tr>
                    <th><label for="txtSite">Website</label></th>
                    <td>
                        <input type="text" id="txtSite" name="txtSite">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Add New" name="btnAdd">
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html>
