<?php
echo '<h1>Super Global Variables</h1>';

#1. GLOBALS
echo 'PHP Superglobal - $GLOBALS <br>';
$x = 75;
$y = 25;
 
function addition() {
  $x = 10;
  $y = 20;
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;

#2. SERVER
echo '1. Resources '. $_SERVER['PHP_SELF'];
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
//echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

