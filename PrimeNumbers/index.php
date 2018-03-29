<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'PrimeNumbers.php';
include_once 'PrimeNumbers2.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//        $liczba = new PrimeNumbers;
//        $liczba->isPrime(5);
          $liczba = new PrimeNumbers2;
          $liczba->isPrime(97);
        ?>
    </body>
</html>
