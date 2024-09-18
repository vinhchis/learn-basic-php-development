<?php

$className = "T5.2306.E1";
$reClass = "/^[T]\d{1}[.]\d{4}[.][MAE]{1}[01]{1}/i"; //sensitive case

if(!preg_match($reClass,$className)):
    echo 'Class Name is invalid';
else:
    echo $className. ' is valid';
endif;