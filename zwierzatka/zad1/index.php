<?php
include_once 'klasy/zwierze.php';
include_once 'klasy/ryba.php';
include_once 'klasy/Ssak.php';
include_once 'klasy/PiesDomowy.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Klasa osoba</title>
    </head>
    <body>
        <?php
        $zwierze = new zwierze;
        echo $zwierze->oddychaj();
        echo '<br/><br/>';
        
        $ryba = new ryba;
        echo $ryba->plyn();
        echo '<br/><br/>';
        
        $PiesDomowy = new PiesDomowy;
        echo $PiesDomowy->szczekaj();
        echo '<br/><br/>';
        
        $Ssak = new ssak;
        echo $Ssak->biegnij(); echo '<br/><br/>'
        ?>
    </body>
</html>