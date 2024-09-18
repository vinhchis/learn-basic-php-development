<?php

#1. Get value from Login Page
$name = $_GET['txtName'];
$password = $_GET['txtPass'];
#2. Check Value
if(($name !='aptech') || ($password!='123')):
    header('location: Ex02_Login.php?mesErr');
else:
    header('location: Ex02_Login.php?mesOk');
endif;

