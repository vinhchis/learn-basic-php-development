<?php
#1. COmmon Syntax
$i = 1;
while($i < 10){
    echo $i++;
}
echo "<br>";
#2. Alternative Syntax

$i = 1;
while($i < 10):
    echo $i++;
endwhile;