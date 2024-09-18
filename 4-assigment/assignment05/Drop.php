<?php

include_once './DBConnect.php';

if (isset($_GET['tName'])):
    $tName = $_GET['tName'];
    $query = "DROP TABLE $tName";
    $rs = mysqli_query($conn, $query);
    
    if($rs):
        header("location: Index.php?msgOK=$tName Table was deleted!!!");
        else:
                header("location: Index.php?msgEror=Nothing to change!!!");

    endif;
endif;

