<?php

$element1 = '<hr align="left" width="';
$size = 30;
$element2 = '%">';

#1. COmmon Syntax
for($i = 0; $i < 100;$i += 5){
    echo $element1 . $i . $element2;
}

#2. Alternative Syntax
for($i = 100; $i > 0;$i -= 5):
    echo $element1 . $i . $element2;
endfor;
