<!DOCTYPE html>
<?php
#1. Start session
#2. Check session
#3. Database connect

include_once "./Patient.php";
$patient = new Patient();

if (isset($_POST['btnAdd'])):
    $patient->createData($_POST);
endif;

$patient->closeConnection();

?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title>Register Page</title>
        <style>
            .error {
                color: red;
                font-size: 1.2em;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>New Patient Register</h1>
            <form action="" method="post">
                <span class="error"> <?php echo isset($_GET['error'])? $_GET['error']:''; ?> </span>
                <div class="form-group">
                    <label for="ID">Patient ID:</label>
                    <input type="text" class="form-control"  id="ID" name="txtID" placeholder="Enter Patient's ID ">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="txtName" placeholder="Enter Patient's Name">
                </div>
                <div class="form-group">
                    <label for="country">Country: </label>
                    <input type="text" class="form-control" id="country" name="txtCountry" placeholder="Enter Patient's Country ">
                </div>
                 <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="text" class="form-control" id="email" name="txtEmail" placeholder="Enter Email's Country ">
                </div>
                <button type="submit" class="btn btn-primary" name="btnAdd">Register</button>
            </form>
        </div>
    </body>
</html>
