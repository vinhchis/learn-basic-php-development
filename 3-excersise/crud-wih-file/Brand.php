<!DOCTYPE html>
<?php
include_once './DBConnect.php';
$query = "select * from brands";
$rs = mysqli_query($conn, $query);
$count = mysqli_num_rows($rs);
?>
<html>
    <head>
        <meta charset="UTF-8">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title>Brand</title>
    </head>
    <body>
        
       <h1>List Item</h1>
            <?php
            if ($count == 0):
                echo "Record not found ";
            else:
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Brand</th>
                            <th>Logo</th>
                            <th>Function</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $x = 0;
                        while ($data = mysqli_fetch_array($rs)):
                            ?>
                            <tr>
                                <td><?= $x = $x+1 ?></td>
                                <td>
                                    <img src='<?= $data[3] ?>'>
                                </td>
                                <td>
                                    <a href="AddLogo.php?code=<?= $data[0] ?>">Add Logo</a>
                                </td>
                                
                            </tr>
                            <?php
                        endwhile;
                        ?>
                    </tbody>
                </table>
            <?php
            endif;
            mysqli_close($conn);
            ?>
    </body>
</html>
