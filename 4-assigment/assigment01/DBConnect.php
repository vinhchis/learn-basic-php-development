<?php
$host = "localhost";
$username = "root";
$pass = "";
$dbname = "customerdb";

$conn = mysqli_connect($host, $username,$pass, $dbname);

//if(!$conn):
//    die("Connection Fail");
//else:
//    echo("Congratulation");
//endif;