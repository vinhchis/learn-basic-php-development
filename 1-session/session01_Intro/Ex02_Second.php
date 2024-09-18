<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
# Khai báo biến
$num = 10;

# 2. Kiết xuất biến với string
echo 'Giá trị của biến num là: ' . $num;

#3. Đặt giá trị trực tiếp chi chuỗi
//    echo '<h1> Giá trị trực tiêos biến num là : $num</h1>';
echo "<h1> Giá trị trực tiếp biến num là : $num</h1>";

#4. echo và ECHO là như hau
ECHO "<h1 style='color: blue'>[ECHO] Giá trị trực tiếp biến num là : $num</h1>";

#5. Có thể dùng lệnh print
print "<h1 style='color: #0F0'>[print] Giá trị trực tiếp biến num là : $num</h1>";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table class="table table-bordered table-hover">
            <tr>
                <th>Đọc biến cấp 1</th>
                <th>Đọc biến cấp 2</th>
            </tr>
            <tr>
                <td><?php echo $num ?></td>
                <td><?= $num ?></td>
            </tr>  
        </table>

        <?php
        ?>
    </body>
</html>
