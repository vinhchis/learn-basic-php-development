<?php

include_once './DBConnect.php';

if (isset($_GET['id'])):
    $id = $_GET['id'];

    $query = "DELETE FROM `tbevent` WHERE Id={$id}";    
    $rs = mysqli_query($conn, $query);

    if ($rs):
        header("location: Event.php?msgOK=Event was deleted!!");
    else:
        header("location: Event.php?msgOK=Nothing to change!!");
    endif;
else:
    header("location: Event.php?msgOK=Please chose a Event you want to delete!!");
endif;

