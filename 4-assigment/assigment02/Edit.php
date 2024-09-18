<!DOCTYPE html>
<?php
include_once "./Patient.php";
$patient = new Patient();

$id = $name = $country = $email ='';

if (!isset($_GET['id'])):
    header("location: Index.php?msgErr=Please Choice A Patient to Update");
else:
    $code = $_GET['id'];
    $data = $patient->filterByCode($code)[0];
    # Push to form
    $id = $data[0];
    $name = $data[1];
    $country = $data[2];
    $email = $data[3];
    
    if(isset($_POST['btnEdit'])):
        $patient->updateData($code);
    endif;
endif;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Edit page</title>
    </head>
    <body>
        <div class="container">
            <h1>Edit A Patient</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="ID">Patient ID:</label>
                    <input type="text" class="form-control"  id="ID" name="txtID" value="<?= $id?>">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="txtName" value="<?= $name?>">
                </div>
                <div class="form-group">
                    <label for="country">Country: </label>
                    <input type="text" class="form-control" id="country" name="txtCountry" value="<?= $country?>">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="text" class="form-control" id="email" name="txtEmail" value="<?= $email?>">
                </div>
                <button type="submit" class="btn btn-primary" name="btnEdit">Edit</button>
            </form>
        </div>
    </body>
</html>
