<!DOCTYPE html>
<?php
if(isset($_FILES['txtLogo'])):
    #1. File Information Processing
    $folder = "files/";
    $fileName = $_FILES['txtLogo']['name'];
    $fileTemp = $_FILES['txtLogo']['tmp_name'];
    $logo = $folder.$fileName;
    
    #2. Upload file
    move_uploaded_file($fileTemp, $logo);
    
    #3. Display Information
    echo '<div class="alert alert-info">';
    echo $folder . "<br>";
    echo $fileName . '<br>';
    echo $fileTemp . '<br>';
    echo $logo . '<br>';
    echo '</div>';
endif;

?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Form Upload</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="txtLogo">
            <input type="submit" value="Upload" name="txtLogo">
        </form>
    </body>
</html>
