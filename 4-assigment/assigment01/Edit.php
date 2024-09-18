<!DOCTYPE html>
<?php
include_once './DBConnect.php';

if (!$_GET['code']):
    header("location: Index.php?msgErr=Please Choice A Customer to Update");
else:
    $code = $_GET['code'];
    $query = "select * from Customer where CCode='{$code}'";

    $rs = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($rs);

    if (isset($_POST['btnEdit'])):
        $name = $_POST['txtName'];
        $ccode = $_POST['txtCode'];
        $phone = $_POST['txtPhone'];
        $email = $_POST['txtEmail'];

        $query = "UPDATE `customer` SET `CCode`='{$ccode}',`CName`='{$name}',`CPhone`='{$phone}',`CEmail`='{$email}' WHERE CCode='{$code}'";
        $rs = mysqli_query($conn, $query);
        
        if ($rs):
            header("location: Index.php?msgOK=Updated the Customer to DB");
        else:
            header("location: Index.php?msgErr=Nothing to Update");
        endif;
    endif;
endif;

mysqli_close($conn);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Edit Page</title>
    </head>
    <body>
        <h2 align="center">Customer Edit Form</h2>
        <form method="post">

            <table class="table table-bordered">
                <tr>
                    <td>Code:</td>
                    <td>
                        <input type="txt" name="txtCode" value="<?= isset($data[0])?$data[0]:'' ?>">
                    </td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td>
                        <input type="txt" name="txtName" value="<?= $data[1] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td>
                        <input type="txt" name="txtPhone" value="<?= $data[2] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>
                        <input type="txt" name="txtEmail" value="<?= $data[3] ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="btnEdit" value="Save">
                    </td>
                </tr>

            </table>
        </form>
    </body>
</html>
