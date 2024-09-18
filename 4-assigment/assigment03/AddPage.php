<!DOCTYPE html>
<?php
#1. Start session
#2. Check session
#3. Database connect
include_once './DBConnect.php';
#4. Check submit button
if (isset($_POST['btnAdd'])):
#5. Get data element
    $name = $_POST['txtName'];
    $country = $_POST['txtCountry'];

    $folder = "upload/";
    $fileName = $_FILES['txtLogo']['name'];
    $fileTemp = $_FILES['txtLogo']['tmp_name'];
    $logo = $folder . $fileName;

    # Upload file
    move_uploaded_file($fileTemp, $logo);
#6. Execute Query

    $query = "INSERT into phonebrand(Name,Country,Logo) VALUES('{$name}','{$country}','/{$logo}')";
    $rs = mysqli_query($conn, $query);
    if (!$rs):
        header('location: IndexPage.php?messError=" Nothing to save "');
    else:
        header('location: IndexPage.php?messOK=" Data is save to database "');
    endif;
endif; //End check submit
#7. Close connection
mysqli_close($conn);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <?php include'./Head.php' ?>
        <title>Add Brand</title>
    </head>
    <body class="container">
        <?php include'./Section.php' ?>
        <h1 align="center">Add Brand Form</h1>
        <form enctype="multipart/form-data" method="post">
            <table>
                <tr align="right">
                    <td align="right">Name:</td>
                    <td><input class="form-control" name = "txtName" autofocus></td>
                </tr>
                <tr>
                    <td align="right">Country:</td>
                    <td><input class="form-control" name = "txtCountry"></td></tr>
                <tr>
                    <td align="right">Logo:</td>
                    <td><input class="form-control" name = "txtLogo" type="file"></td>
                </tr>    
                <tr>
                    <td></td>
                    <td><input type="submit" name="btnAdd" value="Add New" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
    </body>
    <?php include'./Footer.php' ?>
</html>
