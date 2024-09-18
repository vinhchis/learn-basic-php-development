<!DOCTYPE html>
<?php
#1. Start session
#2. Check session
#3. Database connect
include_once './DBConnect.php';

$query = "select * from phonebrand";

$rs = mysqli_query($conn, $query);
$count = mysqli_num_rows($rs);
#Search
if (isset($_GET['btnSearch'])):
    $search = $_GET['txtSearch'];
    $query = "select * from phonebrand where name='{$search}'";
    $rs = mysqli_query($conn, $query);
    $count = mysqli_num_rows($rs);
endif;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <?php include'./Head.php' ?>
        <title>Brand System</title>

    </head>
    <body class="container">
        <?php include'./Section.php' ?>
        <div class="NotiCenter">
            <?php
            if (isset($_GET['messError'])):
                echo "<div class='alert alert-danger'>" . $_GET['messError'] . "</div>";
            endif;

            if (isset($_GET['messOK'])):
                echo "<div class='alert alert-info'>" . $_GET['messOK'] . "</div>";
            endif;
            ?>
        </div>
        <h1>Brand List</h1>

        <?php
        if ($count == 0):
            echo 'Record not found';

        else:
            ?>
            <div id="pnlSearch">
                <a href="./AddPage.php" class="Createnew">Add new
                    <style>
                        .Createnew{
                            font-size: 30px;
                            font-weight: bold;
                            text-decoration: none;
                        }
                    </style>
                </a>
                <form method="get" align="right">
                    <input type="search" placeholder="Enter brand name..." name="txtSearch">
                    <input type="submit" value="Search" name="btnSearch">
                </form>

            </div>

            <div id="pnlList">

                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Name</th>
                        <th>Country</th>
                        <th>Logo</th>
                        <th>Function</th>
                    </tr>
                    <?php
                    while ($data = mysqli_fetch_array($rs)):
                        ?>
                        <tr>
                            <td><?= $data[1] ?></td>
                            <td><?= $data[2] ?></td>
                            <td><?php
                                if (!$data[3]):
                                    echo 'No Logo';
                                else:
                                    ?>
                                    <img src=".<?= $data[3] ?>" width="200px" height="100px">

                                <?php
                                endif;
                                ?></td>
                            <td><a href="Detail.php?id=<?= $data[0]?>">Details</a></td>
                        </tr>
                        <?php
                    endwhile;
                endif;
                ?>
            </table> 
        </div>


    </body>
    <?php include'./Footer.php' ?>
</html>
