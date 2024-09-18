<!DOCTYPE html>
<?php
include_once './Patient.php';

$patient = new Patient();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Index Page</title>
        <style>
            .add-link a {
                float:right;
                padding: 30px;
                font-weight: bold;
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
        <h1 align="center">eHospital</h1>
        <div class="add-link">
            <a href="Register.php">New Patient Register</a>

        </div>
        <table class="table table-bordered">
            <tr>
                <th>Patient ID</th>
                <th>Patient Name</th>
                <th>Country</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
            $patients = $patient ->readData();
            ?>
            <?php
            foreach($patients as $data):
                ?>
                <tr>
                    <td><?= $data[0] ?></td>
                    <td><?= $data[1] ?></td>
                    <td><?= $data[2] ?></td>
                    <td><?= $data[3] ?></td>
                    <td>
                        <a href="Edit.php?id=<?= $data[0] ?>">Edit</a>
                    </td>
                </tr>
                <?php
                endforeach;
                $patient->closeConnection();
            ?>
        </table>
    </body>
</html>
