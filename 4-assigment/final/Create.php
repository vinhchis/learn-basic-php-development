<!DOCTYPE html>
<?php
include_once './DBConnect.php';

if (isset($_POST['btnCreate'])):
    $des = $date = $pCode = $location = '';
    $erorr = '';
    
    if (!empty($_POST['txtDes'])):
        $des = sanitize_data($_POST['txtDes']);
    else:
        $error .= 'Description ';
    endif;
    
     if (!empty($_POST['txtDt'])):
        $date = sanitize_data($_POST['txtDt']);
    else:
        $error .= 'Date ';
    endif;
    
     if (!empty($_POST['txtLocation'])):
        $location = sanitize_data($_POST['txtLocation']);
    else:
        $error .= 'Location ';
    endif;
    
     if (!empty($_POST['nPCode'])):
        $pCode = (int)sanitize_data($_POST['nPCode']);
        if($pCode < 4000):
            $error .= 'Post Code has to greater than 4000 ';
        endif;
    else:
        $error .= 'Description ';
    endif;
    
    if (empty($error)):
        $query = "INSERT INTO `tbevent`(`Description`, `DateTime`, `Location`, `PostCode`) "
            . "VALUES ('{$des}','{$date}','{$location}',{$pCode})";

        $rs = mysqli_query($conn, $query);
        if ($rs):
            header("location: Event.php?msgOk=Data was inserted!!!");
        else:
            header("location: Create.php?msgErr=Data wasn't created!!!");
        endif;
    else:
        header("location: Create.php?msgErr=$error can't empty");
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

        <title>Create </title>
    </head>
    <body>
         <?php
        if (isset($_GET['msgErr'])):
            echo "<div class='alert alert-warning'> {$_GET['msgErr']} </div>";
        elseif (isset($_GET['msgOK'])):
            echo "<div class='alert alert-info'> {$_GET['msgOK']} </div>";
        endif;
        ?>
        <h2>New Event</h2>
        <form method="post" >
            <table class="table table-bordered">
                <tr>
                    <td>Description</td>
                    <td>
                        <input name="txtDes" >
                    </td>
                </tr>
                <tr>
                    <td>Date Time:</td>
                    <td>
                        <input name="txtDt" >
                    </td>
                </tr>
                <tr>
                    <td>Location:</td>
                    <td>
                        <input name="txtLocation" >
                    </td>
                </tr>
                <tr>
                    <td>Post Code:</td>
                    <td>
                        <input type="number" name="nPCode" >
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button class="btn btn-info"name="btnCreate">Create</button>
                    </td>
                </tr>
        </form>

    </body>
</html>
