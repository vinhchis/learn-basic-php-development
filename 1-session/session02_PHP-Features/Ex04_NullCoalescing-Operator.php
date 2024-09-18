<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $name = null;
//        $firstname = 'Hoang';
      $firstname = null;
        #1. In earlier version
        if (!empty($firstname))
            $name = $firstname;
        else
            $name = "Chưa có giá trị";
        echo $name . '<p>';

        #2. PHP 7
        $name = $firstname ?? "No value";
        echo $name;
        ?>

    </body>
</html>
