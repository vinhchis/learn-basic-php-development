<?php

#A. Single Dimension
$mail = [
           "cao" => "cao@gmail.com",
           "long" => "long@gmail.com",
           "thai" => "thai@gmail.com",
           "quang" => "quang@gmail.com"];

foreach ($mail as $key => $value){
    echo $key . ' có email là ' . $value . '<br>';
}
echo '<hr align="left" width ="50%">';

# B. Multiple Dimension

$cars = [  
         "item1" =>   ['brand'=> 'Vinfast','model'=>'VF9','price'=>65000],
         "item2" =>   ['brand'=> 'Toyota','model'=>'Camry','price'=>60000],
         "item3" =>   ['brand'=> 'Mazda','model'=>'CX5','price'=>40000]
        ];

foreach($cars as $key => $value){
    foreach($value as $data){
        echo $data . ' - ';
    }
    echo '<br>';
}
