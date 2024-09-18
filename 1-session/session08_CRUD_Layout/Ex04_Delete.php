<?php
include_once './DBConnect.php';
if (!isset($_GET['code'])):
    header("location: Ex01_Read.php");
else:
    $code = $_GET['code'];
    $query = "delete from Item where Code = '{$code}'";
    $rs = mysqli_query($conn, $query);

    if (!$rs):
        header('location: Ex01_Read.php?msgOK="Success Deleted"');
    else:
        header('location: Ex01_Read.php?msgOK="Nothing is saved to databases"');
    endif;
endif;

mysqli_close($conn);
