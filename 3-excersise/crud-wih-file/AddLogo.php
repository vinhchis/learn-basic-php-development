<!DOCTYPE html>
<?php
include_once './DBConnect.php';

if (!isset($_GET['code'])):
    header("location: Brand.php");
endif;

$code = $_GET['code'];

$query = "select * from brands where BID = {$code}";
$rs = mysqli_query($conn, $query);
$data = mysqli_fetch_array($rs);

if (isset($_POST['btnSave'])):
    if (isset($_FILES['fLogo'])):
        #1. File Information Processing
        $folder = "img/";
        $fileName = $_FILES['fLogo']['name'];
        $fileTemp = $_FILES['fLogo']['tmp_name'];
        $logo = $folder . $fileName;

        #2. Upload file
        move_uploaded_file($fileTemp, $logo);

        $query = "UPDATE brands
                SET LOGO = '{$logo}'
                WHERE BID = {$code} ";
        $rs = mysqli_query($conn, $query);
        header("location: Brand.php");
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
        <h2>Add Logo</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <th><label for="txtName">Name</label></th>

                    <td>
                        <input type="text" id="txtName" name="txtName" readonly value='<?= $data[1] ?>'>
                    </td>

                </tr>
                <tr>
                    <th><label for="Logo">Logo</label></th>
                    <td>
                        <input type="file" id="Logo" name="fLogo">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Save" name="btnSave">
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html>
