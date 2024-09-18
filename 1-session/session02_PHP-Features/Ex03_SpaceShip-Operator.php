<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Single comparison operator
        # Output -1
        $x = 10;
        $y = 20;
        echo $x . '<=>' . $y, ' return ', $x <=> $y;
        echo "<br>";
        # Output 0
        $x = 10;
        $y = 10;
        echo $x . '<=>' . $y, ' return ', $x <=> $y;
        echo "<br>";
        # Output -1
        $x = 20;
        $y = 10;
        echo $x . '<=>' . $y, ' return ', $x <=> $y;
        ?>
    </body> 
</html>
