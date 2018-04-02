<?php

/**
 * Description of PrimeNumbers
 *
 * @author cronix
 */
class PrimeNumbers2 {

    public $n, $wynik, $wyn;

    public function isPrime($n) {
        
        $g = floor($n / 2);
        $wynik = 0;
        $wyn = 0;
        for ($i = 2; $i <= $g; $i++) {
            if ($wynik == 0 && $n % $i == 0) {
                ++$wynik;
              //  echo 'wynik '.$wynik;
             //   echo '<br/>';
            } else {
                ++$wyn;
              //  echo 'wyn '.$wyn;
             //   echo '<br/>';
            }
        } if ($wynik == 0) {
            echo 'podana liczba '.$n.' jest liczbą pierwszą';
            echo '<br/>';
        } else {
            echo 'podana liczba '.$n.' nie jest liczbą pierwszą';
        }
    }

}

?>