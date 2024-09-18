<!DOCTYPE html>
<?php
session_start();
include_once './DBConnect.php';
include_once './CheckLogin.php';    

if (isset($_POST['btnCreate'])):
    $tName = $f01 = $f02 = $f03 = "";
    $d01 = $d02 = $d03 = "";
    $emt = "";
    if (!empty($_POST['txtTbName'])):
        $tName = sanitize_data($_POST['txtTbName']);
    else:
        $emt .= 'Name is empty';
    endif;

    if (!empty($_POST['txtF01'])):
        $f01 = sanitize_data($_POST['txtF01']);
    else:
        $emt .= 'x';
    endif;

    if (!empty($_POST['txtF02'])):
        $f02 = sanitize_data($_POST['txtF02']);
    else:
        $emt .= 'x';
    endif;

    if (!empty($_POST['txtF03'])):
        $f03 = sanitize_data($_POST['txtF03']);
    else:
        $emt .= 'x';
    endif;

    if (!empty($_POST['txtD01'])):
        $d01 = sanitize_data($_POST['txtD01']);
    else:
        $emt .= 'x';
    endif;

    if (!empty($_POST['txtD02'])):
        $d02 = sanitize_data($_POST['txtD02']);
    else:
        $emt .= 'x';
    endif;

    if (!empty($_POST['txtD03'])):
        $d03 = sanitize_data($_POST['txtD03']);
    else:
        $emt .= 'x';
    endif;

    if (empty($emt)):
        $query = "CREATE TABLE $tName(
                        id INT AUTO_INCREMENT PRIMARY KEY ,
                        $f01	$d01,
                        $f02	$d02,
                        $f03	$d03
                );";

        $rs = mysqli_query($conn, $query);
        if ($rs):
            $_SESSION['tableName'] = $tName;
            header("location: Index.php?msgOk=Table is created!!!");
        else:
            header("location: Management.php?msgErr='Table didn't created!!!");
        endif;
    else:
        header("location: Management.php?msgErr='Fields are not empty");
    endif;

endif;

function sanitize_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES);
    return $data;
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Management</title>
        <style>
            h2 {
                color: graytext;
                font-style: italic;
            }
        </style>
    </head>
    <body>
        <?php
        if (isset($_GET['msgErr'])):
            echo "<div class='alert alert-warning'> {$_GET['msgErr']} </div>";
        elseif (isset($_GET['msgOK'])):
            echo "<div class='alert alert-info'> {$_GET['msgOK']} </div>";
        endif;
        ?>
        <h1>DataBase Manager System</h1>
        <h2>Create Table Form</h2>
        <form method="post" class="form">
            <table class="table table-bordered">
                <tr>
                    <td align="right">Table Name:</td>
                    <td>
                        <input name="txtTbName">
                    </td>
                </tr>
            </table>
            <h2> Create three fields for table</h2>
            <table class="table table-bordered">
                <tr>
                    <td>No</td>
                    <td>Fields Name</td>
                    <td>Data Type</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <input name="txtF01">
                    </td>
                    <td>
                        <input name="txtD01">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <input name="txtF02">
                    </td>
                    <td>
                        <input name="txtD02">

                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        <input name="txtF03">
                    </td>
                    <td>
                        <input name="txtD03">

                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <button class="btn btn-info" type="submit" name="btnCreate">Create Table</button>
                    </td>

                </tr>
            </table>
        </form>

    </body>
</html>
