<?php

#1. Các phiên bản cũ
$x = 10;
$y = 3;
        
$z = $x/$y;

echo $x / $y;
echo "<br>";
echo $z;

echo '<p>' . 'Kết quả nguyên là ' . (int)($x / $y);

#2. Version 7.0 
echo '<p>' . 'Kết quả nguyên qua hàm intDiv là ' . intdiv($x, $y);



    