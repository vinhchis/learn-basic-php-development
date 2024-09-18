<!DOCTYPE html>
<?php
include_once './DBConnect.php';

$query = "select * from tbEvent";

$rs = mysqli_query($conn, $query);
#Search
if (isset($_POST['btnSearch'])):
    if (!empty($_POST['txtSearch'])):
        $event = $_POST['txtSearch'];
        $query = "select * from tbEvent where Description  LIKE '%{$event}%'";
        $rs = mysqli_query($conn, $query);
    endif;
else:

endif;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Event</title>
    </head>
    <body>
        <?php
        if (isset($_GET['msgErr'])):
            echo "<div class='alert alert-warning'> {$_GET['msgErr']} </div>";
        elseif (isset($_GET['msgOK'])):
            echo "<div class='alert alert-info'> {$_GET['msgOK']} </div>";
        endif;
        ?>
        <h1>Event List</h1>
        <a href="Create.php">Create New Event</a>
        <form method="post">
            <input name="txtSearch" placeholder="Enter Event name">
            <button name="btnSearch">Search</button>
        </form>

        <table class="table table-bordered">
            <tr>
                <td>id</td>
                <td>Description</td>
                <td>Date and Time</td>
                <td>Location</td>
                <td>post code</td>
                <td>action</td>

            </tr>

            <?php
            if ($rs->num_rows > 0):
                while ($row = mysqli_fetch_array($rs)):
                    ?>
                    <tr>
                        <td><?= $row[0] ?></td>
                        <td><?= $row[1] ?></td>
                        <td><?= $row[2] ?></td>
                        <td><?= $row[3] ?></td>
                        <td><?= $row[4] ?></td>
                        <td>
                            <a href="Remove.php?id=<?= $row[0] ?>" onclick="return confirm('Are you want to delete this Event!!!')">remove</a>
                        </td>
                    </tr>
                    <?php
                endwhile;
            else:
                echo '<tr><td colspan="6">' . 'No records' . '</td></tr>';
            endif;
            ?>

        </table>

        <?php
        // put your code here
        ?>
    </body>
</html>
