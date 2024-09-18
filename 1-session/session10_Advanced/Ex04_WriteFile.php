<?php
$fileName = "files/test.txt";

#Open file
$fileOpen = fopen($fileName, 'a');

$text = "Hello, Welcome to my Home" . PHP_EOL . "Good bye!!";

#write to file
fwrite($fileOpen, $text);

fclose($fileOpen);

echo 'File is saved';
