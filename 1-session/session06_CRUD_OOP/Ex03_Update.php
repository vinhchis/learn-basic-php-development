<!DOCTYPE html>
<?php
    include_once './Item.php';
    $item = new Item();
    if(!isset($_GET['code'])):
    header("location: Ex01_Read.php");
    endif;
    
    $code = $_GET['code'];
    $data = $item->filterByCode($code);
    
    if(isset($_POST['btnUpdate'])):
        $item->updateData();
    endif;
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title>CRUD | Update</title>
    </head>
    <body>
        <div class="container">
            <h1>Update the Item</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" class="form-control" id="code" name="txtCode" value="<?= $data[0] ?>">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control"  id="name" name="txtName" value="<?= $data[1] ?>">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="txtPrice" value="<?= $data[2] ?>">
                </div>

                <button type="submit" class="btn btn-primary" name="btnUpdate">Update</button>
            </form>
        </div>
    </body>
</html>

