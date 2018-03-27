<?php
include_once 'Osoba.php';
include_once 'Pracownik.php';
include_once 'Student.php';
include_once 'Emeryt.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
        $Osoba = new Osoba();
        echo $Osoba->getDochody();
        echo '<br/><br/>';
        
        $pracownik = new Pracownik();
        echo $pracownik->getDochody();
        echo '<br/>';
        echo $pracownik->getPensja();
        echo '<br/><br/>';
        
        $student = new Student();
        echo $student->getDochody();
        echo '<br/>';
        echo $student->getStypendium();
        echo '<br/><br/>';
        
        $remeryt = new Emeryt();
        echo $remeryt->getDochody();
        echo '<br/>';
        echo $remeryt->getEmerytura();
        echo '<br/><br/>';
        
        
        ?>
    </body>
</html>
