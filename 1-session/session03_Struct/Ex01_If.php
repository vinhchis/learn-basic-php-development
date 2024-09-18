<?php
$num = 10;
#1. Common systax
if($num >= 0)
{
    echo $num . ' là số dương';
}else {
    echo $num . ' là số âm';
}

echo '<hr align="left" width="30">';

#2. Alternative struct
if($num >= 0):
    echo $num . ' là số dương [Alternative]';
else:
    echo $num . ' là số âm [Alternative]';
endif;
    