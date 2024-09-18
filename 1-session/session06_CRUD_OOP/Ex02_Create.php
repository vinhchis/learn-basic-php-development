<!DOCTYPE html>
<?php
#1. Start session
#2. Check session
#3. Database connect

include_once "./item.php";
#Access class Item
$item = new Item();
#4. Check Form is Submitted ?
if (isset($_POST['btnAdd'])):
    $item->createData($_POST);
endif;


#7. Close connection

?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title>CRUD | Create</title>
    </head>
    <body>
        <div class="container">
            <h1>Create Product</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control"  id="name" name="txtName" placeholder="Enter product name">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="txtPrice" placeholder="Enter product price">
                </div>
                <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" class="form-control" id="code" name="txtCode" placeholder="Enter product code">
                </div>
                <button type="submit" class="btn btn-primary" name="btnAdd">Add</button>
            </form>
        </div>
    </body>
</html>
