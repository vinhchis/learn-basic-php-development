<?php
#1. Database Information
    $server = "localhost"; //default port 3306
    $account = "root";
    $password = "";
    $database = "branddb";
    
#2. database connect
$conn = mysqli_connect($server, $account, $password, $database);

#3. Test 
//if(!$conn):
//    die("Connection Fail");
//else:
//    echo("Congratulation");
//endif;