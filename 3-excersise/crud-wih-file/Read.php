<!DOCTYPE html>
<?php
include_once './DBConnect.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title>Brand</title>
    </head>
    <body>
         <?php
            if (isset($_GET['msgErr'])):
                echo "<div class='alert alert-warning'> {$_GET['msgErr']} </div>";
            elseif (isset($_GET['msgOK'])):
                echo "<div class='alert alert-info'> {$_GET['msgOK']} </div>";
            endif;
            ?>
        <nav class="navbar navbar-expand-sm bg-info navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Brands
                    </a>

                    <div class="dropdown-menu">
                        <?php
                        $query = "select Name from brands";
                        $rs = mysqli_query($conn, $query);

                        while ($data = mysqli_fetch_array($rs)):
                            ?>
                            <a class="dropdown-item" target="new" href="#">
                                <?= $data[0] ?>
                            </a>
                            <?php
                        endwhile;
                        mysqli_close($conn);
                        ?>

                    </div>
                </li>
                
            </ul>
        </nav>
        <div class="container">
            <h3>Homepage</h3>
            <p style="color:gray; font-style: italic">Choose the Brand to visit the Brand's site.</p>
            <a href="Create.php">New Brands?</a>
            <a href="Brand.php">Brand Management</a>
        </div>
    </body>
</html>

