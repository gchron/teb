<?php
include_once 'Samochody.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $pozycja = new Pozycja(-30, 30);
        $predkosc = new Predkosc(-2, 25);
        $samochodA = new Samochody('czarny', '650', $pozycja, $predkosc);

        echo $samochodA->przyspiesz(); echo '<br/>';
        echo $samochodA->hamuj(); echo '<br/>';
        echo $samochodA->skrec(); echo '<br/>';
        echo $samochodA->kolor; echo '<br/>';
        echo $samochodA->masa; echo '<br/>';
        print_r($samochodA->predkosc); echo '<br/>';
        print_r($samochodA->pozycja); echo '<br/>';
        ?>
    </body>
</html>
