<?php
$today = date('D');
#1. 
switch ($today) {
    case 'Tue':
        echo 'Hôm nay là thứ 3';
        break;
    case 'Thu':
        echo 'Hôm nay là thứ 5';
        break;
    case 'Sat':
        echo 'Hôm nay là thứ 7';
        break;

    default:
        echo 'Hôm nay là ngày nghỉ';
        break;
}
echo '<hr align="left" width="30">';

#2. Alternative struct
switch($today):
    case 'Tue':
        echo 'Hôm nay là thứ 33';
        break;
    case 'Thu':
        echo 'Hôm nay là thứ 55';
        break;
    case 'Sat':
        echo 'Hôm nay là thứ 77';
        break;
    default:
        echo 'Hôm nay là ngày nghỉ';
        break;
endswitch;
    
