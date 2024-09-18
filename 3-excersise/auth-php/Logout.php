<?php
session_start();

#2. Clear session
unset($_SESSION["isLogin"]);
session_destroy();
header("location: Login.php");
exit();