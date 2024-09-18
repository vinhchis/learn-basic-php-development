<!DOCTYPE html>
<?php
// error_reporting(0) //Disable Warnings
if (isset($_FILES['txtPath'])):
    #1. File Information Processing
    $folder = "files/";
    $fileName = $_FILES['txtPath']['name'];
    $fileTemp = $_FILES['txtPath']['tmp_name'];
    $path = $folder . $fileName;
    #----------------------------------------#
    $fileSize = $_FILES['txtPath']['size'];
    $fileType = $_FILES['txtPath']['type'];
    $fileExt = pathinfo($path, PATHINFO_EXTENSION);

    #2. upload Image into folder in server
    $allowTypes = array("jpg", "png", "txt");

    if (!in_array($fileExt, $allowTypes)):
        $msgErr[] = "Incorrect Extension, please choose a JPG, PNG OR TXT";
    endif;

    if ($fileSize > 2097152):
        $msgErr[] = 'FIle size has to be less than 2 MB';
    endif;
    
    
    if (empty($msgErr)):
        move_uploaded_file($fileTemp, $path);

        #3. Display Information
        echo '<div class="alert alert-info">';
        echo $folder . "<br>";
        echo $fileName . '<br>';
        echo $fileTemp . '<br>';
        echo $path . '<br>';
        echo $fileSize . '<br>';
        echo $fileExt . '<br>';
        echo $fileType . '<br>';
        echo '</div>';
    else:
        echo '<div class="alert alert-danger">';
        print_r($msgErr);
        echo '</div>';
    endif;
#2. Upload file

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
        <?php
        if (isset($_GET['msgErr'])):
            echo "<div class='alert alert-warning'> {$_GET['msgErr']} </div>";
        elseif (isset($_GET['msgOK'])):
            echo "<div class='alert alert-info'> {$_GET['msgOK']} </div>";
        endif;
        ?>
        <h2>Form Upload</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="txtPath">
            <input type="submit" value="Upload" name="txtPath">
        </form>
    </body>
</html>

