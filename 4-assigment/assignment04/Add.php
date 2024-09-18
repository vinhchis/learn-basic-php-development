<!DOCTYPE html>
<?php
session_start();
include_once './DBConnect.php';
include_once './CheckLogin.php';

if (isset($_SESSION['tableName'])):
    $tableName = $_SESSION['tableName'];
endif;

$query = "show columns from $tableName";
$rsColumns = mysqli_query($conn, $query);

# Get name of Column table
$columns = [];
$firstRow = true;
while ($row = mysqli_fetch_array($rsColumns)):
    if (!$firstRow):
        $columns[] = $row[0];
    else:
        $firstRow = false;
    endif;
endwhile;
//print_r($columns);
#Get input
$input = [];
$error = "";

for ($x = 0; $x < count($columns); $x++):
    $input[] = "";
endfor;

if (isset($_POST['btnAdd'])):
    for ($x = 0; $x < count($columns); $x++):
        if (empty($_POST['txt' . $columns[$x]])) :
            $error .= 'x';
        else :
            $input[$x] = sanitize_data($_POST['txt' . $columns[$x]]);
        endif;
    endfor;

//    print_r($input);

    if (empty($error)):
        $query = "INSERT INTO `{$tableName}`(`{$columns[0]}`, `{$columns[1]}`, `{$columns[2]}`) VALUES ('{$input[0]}','{$input[1]}','{$input[2]}')";
        $rs = mysqli_query($conn, $query);

        if ($rs):
            header("location: Index.php?msgOK=Added A new Data to DB");
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

        <title>Insert Page</title>
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
        <h2>Insert data <?= $tableName ?>Form</h2>
        <form method="post" class="form">
            <table class="table table-bordered">
                <?php
                for ($x = 0;
                        $x < count($columns);
                        $x++):
                    ?>
                    <tr>
                        <td>
                            <?= $columns[$x] ?>:
                        </td>
                        <td>
                            <input name="<?= 'txt' . $columns[$x] ?>">
                        </td>
                    </tr>
                    <?php
                endfor;
                ?>

                <tr>
                    <td colspan="3" align="center">
                        <button class="btn btn-info" type="submit" name="btnAdd">Add New</button>
                    </td>

                </tr>
            </table>
        </form>

    </body>
</html>
