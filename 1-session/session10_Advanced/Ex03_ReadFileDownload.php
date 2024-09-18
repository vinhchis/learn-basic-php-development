<!DOCTYPE html>
<?php
if (isset($_GET['path'])):
#1. Get URL
    $url = $_GET['path'];
#2. Clear cache
    clearstatcache();
#3. Check path exists or not
    if (file_exists($url)):
#4. Define header information
// Set content type to plain text
        header("Content-Type: application/octet-stream");

// Set content description
        header("Content-Description: File Transfer");

// Set content disposition to force a download
        header('Content-Disposition: attachment; filename="' . basename($url) . '"');

// Set content length (replace 1000 with the actual length of your content)
        header('Content-Length: ' . filesize($url));

// Prevent caching (Pragma is for HTTP/1.0 compatibility, Cache-Control is for HTTP/1.1)
        header("Pragma: public");

        #5. Clear system output
        flush();
        #6. Get file size
        readfile($url, true);

        #7. Terminate
        die();
    endif;

endif;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>build-in PHP readfile() function</h2>
        <a href="Ex03_ReadFileDownload.php?path=files/test.txt">Download *.txt</a>
        <a href="Ex03_ReadFileDownload.php?path=files/test.docx">Download *.docx</a>
        <a href="Ex03_ReadFileDownload.php?path=files/test.jpg">Download *.jpg</a>
        <a href="Ex03_ReadFileDownload.php?path=files/test.pdf">Download *.pdf</a>
        <a href="Ex03_ReadFileDownload.php?path=files/test.txt">Download *.txt</a>

    </body>
</html>
