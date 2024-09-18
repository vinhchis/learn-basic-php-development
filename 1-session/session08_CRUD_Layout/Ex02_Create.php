<!DOCTYPE html>
<?php
#1. Start session
#2. Check session
#3. Database connect

include_once './DBConnect.php';
#4. Check Form is Submitted ?
if (isset($_POST['btnAdd'])):
    #5. Get data elements
    $code = $_POST['txtCode'];
    $name = $_POST['txtName'];
    $price = $_POST['txtPrice'];

    #6. Excute Query
    $query = "insert into Item VALUES ('{$code}', '{$name}', {$price})";
    $rs = mysqli_query($conn, $query);
    if (!$rs):
        header('location: Ex01_Read.php?msgOK="Nothing happen"');
    else:
        header('location: Ex01_Read.php?msgOK="Data is saved to databases"');
    endif;
endif;

#7. Close connection
mysqli_close($conn);
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <?php
        include './Head.php';
        ?>
        <title>CRUD | Create</title>
    </head>
    <body>
        <?php
        include './Main.php';
        ?>
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
    <?php
    include './Foot.php';
    ?>
</html>
