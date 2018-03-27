<?php
include_once 'Punkt.php';
include_once 'PunktB.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $punktA = new Punkt();
        echo $punktA->pokaz();
        echo '<br/>';
        echo $punktA->init();
        echo '<br/>';
        echo $punktA->wspX();
        echo '<br/>';
        echo $punktA->wspY();
        echo '<br/><br/>';
        $punktB = new PunktB();
        echo $punktB->pokaz();
        echo '<br/>';
        echo $punktB->init();
        echo '<br/>';
        echo $punktB->wspX();
        echo '<br/>';
        echo $punktB->wspY();
        echo '<br/>';
        echo $punktB->promien();
        echo '<br/>';
        
        ?>
    </body>
</html>
