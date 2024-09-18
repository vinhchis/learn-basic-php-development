<?php
#1. Start Session
session_start();

#2. Clear session
unset($_SESSION["code"]);
session_destroy();
header("location: Ex04_Session.php");
exit();