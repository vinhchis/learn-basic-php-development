<?php
#1. Implicit data type
$fullname = "LÊ VĂN A";
$money = 1_000_000_000;
$unit = "USD";

echo "$fullname-$money-$unit <br>";
#2. var_dump() => kiểm tra kiểu dữ liệu
var_dump($fullname);
echo '<br>';

var_dump($money);
echo '<br>';

var_dump($unit);
echo '<br>';

var_dump($x = 10.5);
echo '<br>';

var_dump($y = true);
echo '<br>';

var_dump(null);
echo '<br>';








