<?php

#1. Database information
$server = "localhost"; //default port 3306
$account = "root";
$password = "";
$database = "phonebranddb";

#2. Database connect
$conn = mysqli_connect($server,$account,$password,$database);

#3. Test
//if(!$conn):
//    die("Connection fails!");
//else:
//    echo 'Congratulation!';
//endif;