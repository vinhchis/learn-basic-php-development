<?php

$fileName = "files/test.txt";

#Open File
$fileOpen = fopen($fileName, "r");
$text = fread($fileOpen, filesize($fileName));

echo "<h2>Text in {$fileName} </h2>";
echo "<pre> {$text} </pre>";
