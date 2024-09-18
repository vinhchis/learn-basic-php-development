<?php
#1. Start Session
session_start();

#2. Clear session
unset($_SESSION['admin']);
session_destroy();
header("location: Login.php");
exit();

