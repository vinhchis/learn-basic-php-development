<!DOCTYPE html>
<?php
include_once './DBConnect.php';

# Define variables and set to empty values
$nameErr = $codeErr = $phoneErr = $emailErr = "";
$name = $code = $phone = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"):
    $nameErr = $codeErr = $phoneErr = $emailErr = "";

    if (empty($_POST["txtName"])) :
        $nameErr = "Name is required";
    else :
        $name = sanitize_data($_POST['txtName']);
    endif;

    if (empty($_POST["txtCode"])) :
        $codeErr = "Code is required";
    else :
        $code = sanitize_data($_POST['txtCode']);
    endif;

    if (empty($_POST["txtPhone"])) :
        $phoneErr = "Phone is required";
    else :
        $phone = sanitize_data($_POST['txtPhone']);
    endif;

    if (empty($_POST["txtEmail"])) :
        $emailErr = "Email is required";
    else :
        $email = sanitize_data($_POST['txtEmail']);
    endif;

    $error = $nameErr . $codeErr . $phoneErr . $emailErr;
    
    if (empty($error)):
        $query = "INSERT INTO customer(`CCode`, `CName`, `CPhone`, `CEmail`) VALUES ('{$code}','{$name}','{$phone}','{$email}')";
        $rs = mysqli_query($conn, $query);

        if ($rs):
            header("location: Index.php?msgOK=Added A new Customer to DB");
        else:
            header("location: Index.php?msgErr=Nothing to Add");
        endif;
    endif;
endif;

mysqli_close($conn);

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

        <title>Add Page</title>
        <style>
            .error {
                color: red;
                font-size: 13px;
                font-weight: 300;
            }
        </style>
    </head>
    <body>
        <h2 align="center">Customer Register Form</h2>
        <form method="post">

            <table class="table table-bordered">
                <tr>
                    <td>Code: <span class="error"><?= $codeErr ?></span></td>
                    <td>
                        <input type="txt" name="txtCode" value="<?php echo isset($_POST['txtCode'])?$_POST['txtCode']:''; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Name: <span class="error"><?= $nameErr ?></td>
                    <td>
                        <input type="txt" name="txtName">
                    </td>
                </tr>
                <tr>
                    <td>Phone: <span class="error"><?= $phoneErr ?></td>
                    <td>
                        <input type="txt" name="txtPhone">
                    </td>
                </tr>
                <tr>
                    <td>Email: <span class="error"><?= $phoneErr ?></td>
                    <td>
                        <input type="txt" name="txtEmail">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="btnReg" value="Register">
                    </td>
                </tr>

            </table>
        </form>
    </body>
</html>
